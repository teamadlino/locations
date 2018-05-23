<?php
/**
 * Developed by Alireza Hamedashki.
 * Email: a.hamedashki@gmail.com
 * Mobile: +98 938 900 4559
 * Date: 5/23/2018
 * Time: 4:52 PM
 */

namespace Adlino\Locations\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\Console\Input\InputOption;
class PublishCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'locations:publish';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Copy the relevant files to your laravel app.';
    /**
     * @var Filesystem
     */
    private $filesystem;
    private $basePath;
    /**
     * Create a new controller creator command instance.
     *
     * @param  \Illuminate\Filesystem\Filesystem $filesystem
     */
    public function __construct(Filesystem $filesystem)
    {
        parent::__construct();
        $this->filesystem = $filesystem;
        $this->basePath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;
    }
    /**
     * Execute the command
     */
    public function handle()
    {
        $this->copyDatabase();
        $this->info("All files have been copied to your application.");
    }
    /**
     * Replace the default directory seperator with the
     * computer's directory seperator (windows, mac, linux)
     * @param $path
     * @return mixed
     */
    private function formatFilePath($path)
    {
        return str_replace('\\', DIRECTORY_SEPARATOR, $path);
    }
    /**
     * Copy the database files
     */
    private function copyDatabase()
    {
        // SEEDS
        $source = $this->basePath . "database\seeds";
        $destination = database_path('seeds');
        $search = "namespace Bpocallaghan\Locations\Seeds;";
        $this->copyFilesFromSource($source, $destination, $search);
        // MIGRATIONS
        $source = $this->basePath . "database\migrations";
        $destination = database_path('migrations');
        $search = "namespace Bpocallaghan\Locations\Migrations;";
        $this->copyFilesFromSource($source, $destination, $search);
    }
    /**
     * Copy files from the source to destination
     * @param         $source
     * @param         $destination
     * @param boolean $search
     * @param string  $replace
     */
    private function copyFilesFromSource($source, $destination, $search = false, $replace = "")
    {
        $source = $this->formatFilePath($source . DIRECTORY_SEPARATOR);
        $destination = $this->formatFilePath($destination . DIRECTORY_SEPARATOR);
        $files = collect($this->filesystem->files($source));
        // can we override the existing files or not
        $override = $this->overrideExistingFiles($files, $destination);
        $files->map(function (SplFileInfo $file) use (
            $source,
            $destination,
            $override,
            $search,
            $replace
        ) {
            $fileSource = $source . $file->getFilename();
            $fileDestination = $destination . $file->getFilename();
            // if not exist or if we can override the files
            if ($this->filesystem->exists($fileDestination) == false || $override == true) {
                // make all the directories
                $this->makeDirectory($fileDestination);
                // replace file namespace
                $stub = $this->filesystem->get($fileSource);
                if (is_string($search)) {
                    $stub = str_replace($search, $replace, $stub);
                }
                else if (is_array($search)) {
                    foreach ($search as $k => $value) {
                        $stub = str_replace($value, $replace[$k], $stub);
                    }
                }
                $this->filesystem->put($fileDestination, $stub);
                // copy files
                //$this->filesystem->copy($fileSource, $fileDestination);
                $this->info("Copied: {$fileDestination}"); // {$file->getFilename()}
            }
            //dump($file->getFilename());
        });
    }
    /**
     * See if any files exist
     * Ask to override or not
     * @param Collection $files
     * @param            $destination
     * @return bool
     */
    private function overrideExistingFiles(Collection $files, $destination)
    {
        $answer = true;
        $filesFound = [];
        // map over to see if same filename already exist in destination
        $files->map(function (SplFileInfo $file) use ($destination, &$filesFound) {
            if ($this->filesystem->exists($destination . $file->getFilename())) {
                $filesFound [] = $file->getFilename();
            }
        });
        // if files found
        if (count($filesFound) >= 1) {
            dump($filesFound);
            $this->info("Destination: " . $destination);
            $answer = $this->confirm("Above is a list of the files already exist. Override all files?");
        }
        return $answer;
    }
    /**
     * Build the directory for the class if necessary.
     *
     * @param  string $path
     * @return string
     */
    protected function makeDirectory($path)
    {
        if (!$this->filesystem->isDirectory(dirname($path))) {
            $this->filesystem->makeDirectory(dirname($path), 0777, true, true);
        }
        return $path;
    }
}