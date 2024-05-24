<?php

class HashMap {
    private $map;

    public function __construct() {
        $this->map = [];
    }

    // Set method to add key-value pairs to the hashmap
    public function set($key, $value) {
        $this->map[$key] = $value;
        // Time Complexity: O(1)
        // Space Complexity: O(N)
    }

    // Get method to retrieve the value associated with a key
    public function get($key) {
        // Check if the key exists in the hashmap
        if (array_key_exists($key, $this->map)) {
            return $this->map[$key];
        }
        // Return null if the key does not exist
        return null;
        // Time Complexity: O(1)
    }
}

// Create an instance of the HashMap class
$map = new HashMap();

// Set key-value pairs
$map->set('name', 'Rijwan Hossain');
$map->set('age', 30);
$map->set('by', 1993);

// Get values associated with keys
echo $map->get('name') . "\n"; // Output: Rijwan Hossain
echo $map->get('age') . "\n"; // Output: 30
echo $map->get('dob') . "\n"; // Output: (no output as 'dob' key does not exist)

// Print the internal state of the hashmap
print_r($map);

