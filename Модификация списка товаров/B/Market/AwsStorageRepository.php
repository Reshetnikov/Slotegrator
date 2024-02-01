<?php
namespace Market;

use B\AwsS3\AwsUrlInterface;
use B\AwsS3\Client\AwsStorageInterface;
use Market\Exception;

/**
 * Repository for Market's aws.
 */
final class AwsStorageRepository implements AwsStorageInterface
{
    /**
     * Returns whether S3 connection is authorized or not.
     *
     * @return bool
     */
    public function isAuthorized(): bool
    {

    }

    /**
     * Returns AwsUrlInterface instance and throws an exception in case
     * connection or authorization errors.
     *
     * @param string $fileName
     * @return AwsUrlInterface
     * @throws Exception
     */
    public function getUrl(string $fileName): AwsUrlInterface
    {

    }

    /**
     * Returns whether file exists or not.
     *
     * @param string $fileName
     * @return bool
     */
    public function fileExists(string $fileName): bool
    {
        /*...*/
    }
    /**
     * Deletes a file in the filesystem and throws an exception in case of errors.
     *
     * @param string $fileName
     * @return void
     */
    public function deleteFile(string $fileName): void
    {
        /*...*/
    }
    /**
     * Saves a file in the filesystem and throws an exception in case of errors.
     *
     * @param string $fileName
     * @return void
     */
    public function saveFile(string $fileName): void
    {
        /*...*/
    }
}