<?php
    set_time_limit(0);
    class Static0
    {
        public static $counter = 0;

        public static function incrByTwo()
        {
            self::$counter = self::$counter + 2;
        }
    }

    class Static1 extends Static0
    {
        public static function incrByOne()
        {
            self::$counter = self::$counter + 1;
        }

        public static function incrByTwo()
        {
            parent::incrByTwo();
        }
    }

    $time_start = microtime(true);
    for ($i = 0; $i < 10000000; $i++) {
        Static1::incrByOne();
        Static1::incrByTwo();
    }
    $time_end = microtime(true);
    $time = $time_end - $time_start;
?>

Static Performance:
<br>
Total execution time is <?php echo $time; ?>
<br>
Used memory: <?php echo memory_get_usage(); ?>
