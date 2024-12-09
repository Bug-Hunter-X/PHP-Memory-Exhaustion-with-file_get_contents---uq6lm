```php
$data = file_get_contents('large_file.txt');
// ... process $data ...
```

This code might lead to memory exhaustion if `large_file.txt` is significantly large.  `file_get_contents` reads the entire file into memory at once.