<?php

namespace Vich\UploaderBundle\Naming;

/**
 * CurrentDateDirectoryNamer
 *
 * @author David Romaní <david@flux.cat>
 */
class CurrentDateDirectoryNamer implements DirectoryNamerInterface
{
    /**
     * Get current date directory name with format YYYY/mm/dd
     *
     * @param object $obj
     * @param string $field
     * @param string $uploadDir
     *
     * @return string format YYYY/mm/dd with current date
     */
    public function directoryName($obj, $field, $uploadDir)
    {
        $currentDate = new \DateTime();

        return $currentDate->format('Y') . DIRECTORY_SEPARATOR . $currentDate->format('m') . DIRECTORY_SEPARATOR . $currentDate->format('d');
    }
}