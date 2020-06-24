<?php
    set_time_limit(0);
    class Static0
    {
        public $counter = 0;

        public function incrByTwo()
        {
            $this->counter = $this->counter + 2;
        }
    }

    class Static1 extends Static0
    {
        public function incrByOne()
        {
            $this->counter = $this->counter + 1;
        }

        public function incrByTwo()
        {
            parent::incrByTwo();
        }
    }

    $time_start = microtime(true);
    for ($i = 0; $i < 10000000; $i++) {
    	$obj = new Static1();
        $obj->incrByOne();
        $obj->incrByTwo();
    }
    $time_end = microtime(true);
    $time = $time_end - $time_start;
?>

Non Static Performance:
<br>
Total execution time is <?php echo $time; ?>
<br>
Used memory: <?php echo memory_get_usage(); ?>
