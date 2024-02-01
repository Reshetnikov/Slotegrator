<?php
namespace Market;

/**
 * Represents a single product record stored in DB.
 */
class ProductV2 extends Product
{
    /**
     * @var AwsStorageRepository
     */
    private AwsStorageRepository $storageAws;

    /**
     * @var array
     */
    private array $imagesFileName;
    /**
     * @param FileStorageRepository $fileStorageRepository
     */
    public function __construct(FileStorageRepository $fileStorageRepository, AwsStorageRepository $awsStorageRepository)
    {
        $this->storageAws = $awsStorageRepository;
        parent::__construct($fileStorageRepository);
    }

    /**
     * Returns product images URL.
     *
     * @return array
     */
    public function getImagesUrl(): array
    {
        $imagesUrl = [];
        if (!$this->storageAws->isAuthorized()) {
            $imagesUrl;
        }
        foreach ($this->imagesFileName as $imageFileName) {
            if ($this->storageAws->fileExists($imageFileName)) {
                $imagesUrl[] = $this->storageAws->getUrl($imageFileName);
            }
        }
        return $imagesUrl;
    }

    /**
     * Returns whether image was successfully added or not.
     *
     * @param string $imageFileName
     * @return bool
     */
    public function addImage(string $imageFileName): bool
    {
        if (!$this->storageAws->isAuthorized()) {
            return false;
        }
        try {
            $this->storageAws->saveFile($imageFileName);
        } catch (\Exception $exception) {
            /*...*/
            return false;
        }
        /*...*/
        return true;
    }

    /**
     * Returns whether image was successfully deleted or not.
     *
     * @param string $imageFileName
     * @return bool
     */
    public function deleteImage(string $imageFileName): bool
    {
        if (!$this->storageAws->isAuthorized()) {
            return false;
        }
        try {
            $this->storageAws->deleteFile($imageFileName);
        } catch (\Exception $exception) {
            /*...*/
            return false;
        }
        /*...*/
        return true;
    }
}