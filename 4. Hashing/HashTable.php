<?php

class HashTable {
    private $size;
    private $arr;

    public function __construct($size) {
        $this->size = $size;
        $this->arr = array_fill(0, $size, null);
    }

    private function hashFunction($value) {
        $value = (string)$value;
        $sum = 0;

        for ($i = 0; $i < strlen($value); $i++) {
            $sum += ord($value[$i]);
        }

        return $sum % $this->size;
    }

    public function set($value) {
        $index = $this->hashFunction($value);
        if ($this->arr[$index] === null) {
            $this->arr[$index] = [$value];
        } else {
            $this->arr[$index][] = $value;
        }
    }

    public function get($value) {
        $index = $this->hashFunction($value);
        $dataArr = $this->arr[$index];

        if ($dataArr !== null) {
            foreach ($dataArr as $item) {
                if ($item === $value) {
                    return 'Found';
                }
            }
        }
        return 'Not Found!';
    }
}

$table = new HashTable(5);

$table->set('apple');
$table->set('banana');
$table->set('cat');
$table->set(10);
$table->set(100);
$table->set(106);

echo $table->get('apple') . "\n";


