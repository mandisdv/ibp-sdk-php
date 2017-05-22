# IBP API Client

A PHP client for the IBP API.

Work in progress.

## Index

* [Installation](#installation)
* [Usage](#usage)
* [Authentication](#authentication)
* [Folders](#folders)
* [Files](#files)
* [Application](#application)
* [Methodes](#methodes)
* [Pipelines](#pipelines)

## Installation

## Usage

```
use SdV\Ibp;

$ibp = new Ibp('API_BASE_URL');
```

### Exceptions

```
try {
    $folders = $ibp->setApplicationId('APPLICATION-ID')
        ->setApplicationToken('APPLICATION-TOKEN')
        ->folders();
} catch (ApiException $e) {
    /** @var Ibp\Resources\Error */
    var_dump($e->error);
}
```

### Authentication

#### Utiliser un application id

```
$ibp->setApplicationId('APPLICATION-ID-HERE');
```

#### Utiliser un application token

```
$ibp->setApplicationToken('APPLICATION-TOKEN-HERE');
```

#### Utiliser un upload token

```
$ibp->setUploadToken('UPLOAD-TOKEN-HERE');
```

### Folders

#### Récupérer la liste des folders.

```
$folders = $ibp->folders();
```

#### Récupérer un folder.

```
$folder = $ibp->folder('591c57736afd7d0106486d02');
```

#### Créer un folder.

```
$folder = $ibp->createFolder('Mes documents');
```

#### Mettre à jour un folder.

```
$folder = $ibp->updateFolder('591d4dff22b60a00af674c52', 'Images');
```

#### Ajouter un file dans un folder.

```
$folder = $ibp->addFileInFolder('591d4dff22b60a00af674c52', '59142cd4a64da6014c769813');
```

#### Enlever un file d'un folder.

```
$deleted = $ibp->removeFileFromFolder('591d4dff22b60a00af674c52', '59142cd4a64da6014c769813');
```

### Files

#### Récupérer la liste des files.

```
$files = $ibp->files();
```

#### Récupérer un file.

```
$file = $ibp->file('59142cd4a64da6014c769813');
```

#### Tagger un file

```
$file = $ibp->TagFile('59142cd4a64da6014c769813', 'manual', ['tag 1', 'tag 2']);
```

#### Uploader un file

```
$fileContent = fopen(__DIR__. '/README.md', 'r');
$file = $ibp->uploadFile($fileContent);
```

### Application

#### Récupérer la liste des applications.

```
$apps = $ibp->applications();
```

#### Récupérer une application.

```
$app = $ibp->application('5911924f302f600102779d23');
```

#### Créer une application.

```
$app = $ibp->createApplication('Application iPhone v2', 'La nouvelle application iPhone ...');
```

#### Mettre à jour les infos d'une application.

```
$app = $ibp->updateApplication('591d57fe22b60a00e2075f12', 'Application Android v2', 'New Desc');
```

#### Supprimer une application

```
$isDeleted = $ibp->deleteApplication('591d57fe22b60a00e2075f12');
```

### Methodes

#### Récupérer la liste des methodes.

```
$methodes = $ibp->methodes();
```

### Pipelines

#### Récupérer la liste des pipelines.

```
$pipelines = $ibp->pipelines();
```

## Credits

Inspired by The [Forge SDK](https://github.com/themsaid/forge-sdk)


