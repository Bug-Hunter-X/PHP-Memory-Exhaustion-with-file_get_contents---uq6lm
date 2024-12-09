# PHP Memory Exhaustion with file_get_contents()

This repository demonstrates a common PHP error: memory exhaustion when using `file_get_contents()` to read large files.  The `bug.php` file shows the problematic code, while `bugSolution.php` provides a more memory-efficient alternative.

The problem arises when attempting to read a large file into memory all at once using `file_get_contents()`.  For very large files, this can easily exceed available memory, leading to script crashes or server errors.

The solution involves processing the file line by line using a more memory-friendly approach like `fgets()` or `SplFileObject`. This prevents loading the entire file's content into memory simultaneously.