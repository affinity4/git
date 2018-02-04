# Git

PHP Git wrapper with Promise/A API

## Usage

```

require __DIR__ . './vendor/autoload.php';

Affinity4\Git\Git::initBare('./test/test_repo')->then(
    // Succeeded
    function ($value) {
        echo $value; // Created bare git repo at ./test/test_repo.git
    },
    // Failed
    function ($value) {
        echo $value; // An error...most likely from the underlying Affinity4\Process\Process command
    }
);


```

## Licence

MIT

&copy; 2018
