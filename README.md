# Clean Up Get Request Result

## Context
In the PHP file, write a program to perform GET request on the route, 'https://coderbyte.com/api/challenges/json/json-cleaning' and then clean the result object according to the following rules

1. Remove all keys that have value of N/A
2. Remove all empty strings
3. Remove all keys that have value of "-"

If any of the above appear in the array, remove the single item and console log your result as a string

Example {"name":{"first":"Daniel", "middle":N/A, "last":"Smith",}, "age":45}

Result {"name":{"first":"Daniel", "last":"Smith",}, "age":45}