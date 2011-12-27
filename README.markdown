PhpPath
=======

Collection of static functions for better work with directory and file.
Short variant of class ```Path``` is ```P```. This class is better for often using.

Check Directory or File
-----------------------

```php
use PhpPath\Path;
PhpPath::checkDirectory([PATH]);
PhpPath::checkFile([PATH]);
```

```php
use PhpPath\P;
P::cd([PATH]);
P::cf([PATH]);
```

Check if the directory of file exists. If not, then terminated by exception ```\PhpPath\NotExistsPathException```.


Make Path
---------

```php
use PhpPath\Path;
PhpPath::make([PART1], [PART2], ...);
```

```php
use PhpPath\P;
P::m([PART1], [PART2], ...);
```

Make path from list of arguments.


Make and Check Directory or File
--------------------------------

```php
use PhpPath\Path;
PhpPath::makeAndCheckDirectory([PART1], [PART2], ...);
PhpPath::makeAndCheckFile([PART1], [PART2], ...);
```

```php
use PhpPath\P;
P::mcd([PART1], [PART2], ...);
P::mcf([PART1], [PART2], ...);
```

Make path from list of arguments and check if the directory or file exists.
