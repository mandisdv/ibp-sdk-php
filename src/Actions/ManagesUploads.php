<?php

namespace SdV\Ibp\Actions;

use SdV\Ibp\Resources\File;

trait ManagesUploads
{
    /**
     * Upload un file.
     *
     * @param  stream $fileContent Le contenu du file.
     * @param  string $folderId    L'identifiant du folder dans lequel on souhaite ajouter le file.
     * @return File
     */
    public function uploadFile($fileContent, $folderId = null)
    {
        $payload = [];
        if (!is_null($folderId)) {
            $payload = ['folder_id' => $folderId];
        }

        return new File($this->upload('files', $fileContent, $payload)['data']);
    }
}
