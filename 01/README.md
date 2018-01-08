# Coding Challenge 01 - Questions

## Javascript variables
Choose correct answer about output of variable `C`
```Javascript
A = "Hello";
B = "llo";
C = A - B;
```

- [ ] `NaN`
- [ ] `false`
- [ ] `He`
- [ ] `Hello`
- [ ] Invalid Operator
- [ ] Syntax error

## Javascript variable assignment
Choose correct answer about result of `C`
```Javascript
A = 10;
B = "10"
C = (A === B)
```

- [ ] `1`
- [ ] `false`
- [ ] `true`

## Javascript datetime
You want to create a variable called newDate that contains the date March 1 of the current year. Which option will you use?

- [ ] `var newDate= new Date(today.getCurrYear(), 2, 1)`
- [ ] `var newDate= new Date(today.getCurrYear(), 3, 1)`
- [ ] `var newDate= new Date(today.getFullYear(), 3, 2)`
- [ ] `var newDate= new Date(today.getFullYear(), 2, 1)`

## Javascript invalid methods
Which of the following is an **invalid** method of `Date` object?

- [ ] `parse()`
- [ ] `setTime()`
- [ ] `setDay()`
- [ ] `valueOf()`

## Javascript basics
Which of the following is not a valid JavaScript operator?

- [ ] `===`
- [ ] `<<<`
- [ ] `^`
- [ ] `|`

## PHP - core language knowledge
How PHP removes unused objects?

- [ ] PHP is a script languange and there's no need to remove objects from memory - all objects will dead after finishing script.
- [ ] By using Garbage Collection since version 5.3
- [ ] In PHP there is no GC and objects are not removed. From version 5.3 we have optimization reducing objects count.

## PHP - core language knowledge
How can you pass a local variable to an anonymous function?

- [ ] We can pass any variable in parameter when executing function
- [ ] By using keyword "use", for example => $sum = function($a, $b) use ($localEngine) {};
- [ ] We can pass it as default parameter value, for example => $sum = function ($a, $b, $engine = $localEngine) {};

## Superglobals
Which of the following is a superglobal array?

- [ ] `$_GOT`
- [ ] `$_ENV`
- [ ] `$_COOKIES`
- [ ] `$_POS`

## PHP - core language knowledge
Can you remove a loaded class and load it one more time?

- [ ] Yes, you just need to remove all objects of the class
- [ ] Yes, by using \__destruct function
- [ ] No

## PHP - core language knowledge
What does the `session_set_save_handler()` function do in PHP?

- [ ] Sets the user-level session storage functions which are used for storing and retrieving session data
- [ ] Creates a session or resumes the current one based on a session identifier passed via a GET or POST request
- [ ] Sets the name of the current session module
