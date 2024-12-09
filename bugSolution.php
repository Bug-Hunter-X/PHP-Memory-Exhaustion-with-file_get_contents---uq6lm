```php
$file = new SplFileObject('large_file.txt', 'r');
while (!$file->eof()) {
    $line = $file->fgets();
    // ... process each line $line ...
}
```

This revised code uses `SplFileObject` to iterate through the file line by line.  Each line is processed individually, minimizing memory usage.  This solution is far more scalable for handling large files.