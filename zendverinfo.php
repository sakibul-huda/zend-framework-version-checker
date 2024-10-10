<?php
function checkZendVersion() {
    // Check for Zend Framework 1 (class exists in Zend 1)
    if (class_exists('Zend_Version')) {
        echo "Zend Framework 1.x detected. Version: " . Zend_Version::VERSION;
    }
    // Check for Zend Framework 2 (class exists in Zend 2)
    elseif (class_exists('Zend\Version\Version')) {
        echo "Zend Framework 2.x detected. Version: " . Zend\Version\Version::VERSION;
    }
    // If neither class is found, likely not using Zend Framework
    else {
        echo "No Zend Framework detected or an unsupported version.";
    }
}

// Call the function to check the Zend version
checkZendVersion();
?>
