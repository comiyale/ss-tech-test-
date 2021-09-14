# Store Space Technical Test
The purpose of this test is to allow us to get a basic understanding of your technical skill. This test was designed 
to be finished in an hour or less. While you are free to spend as much time as you like completing the test, we 
recommend limiting yourself to one hour. 

**You will not be automatically rejected for submitting an incomplete test.**

Please fork the repository, answer the questions in your local fork, push the answers up to your GitLab fork, and
then notify Eric Schmiedel <eschmiedel@storespace.com> that you have completed the test.

## Question One
Create a function that accepts an array, and returns the array in reverse **without using array.reverse (JavaScript) or 
array_reverse (PHP)**. You may use either JavaScript or PHP. Place your answer file in the `src/question-1` directory.

Test conditions:
```
source - ['Apple', 'Banana', 'Orange', 'Coconut']
return - ['Coconut', 'Orange', 'Banana', 'Apple']
```

*ALTERNATIVE OPTION*

Create a function that determines whether a string is a palindrome. A palindrome is a word or phrase that is spelled 
the same in forwards and reverse. You may use either JavaScript or PHP. Place your answer file in the `src/question-1` 
directory.

Test conditions:
```
Level - returns true
Levels - returns false
Yo banana boy - returns true
```

## Question Two
Visit one of the repositories below, fork the repository, and then write all unit tests you feel are applicable. 
Once you have completed writing tests, add a .md file to the `src/question-2` directory with a link to your fork 
that contains the completed tests. **Pick either the React version OR the Vue 2 version depending on which framework 
you are more comfortable with.** You do not need to write tests for both frameworks, and no bonus points will be 
awarded for completing both. Both version use Jest.

* React version - https://gitlab.com/eschmiedel/ss-react-tech-test
* Vue 2 version - https://gitlab.com/eschmiedel/ss-vue-tech-test

## Question Three
Write unit tests for the PHP class in the `src/question-3` directory, and refactor the `getRouteParams()` method. 
Please use the PHPUnit testing library syntax. Place your test in the `src/question-3` directory and modify the 
`Facility.php` file for the refactor.

## Question Four
Hypothetically, the code in the `src/question-4` directory takes 5+ seconds to run. We want to speed this response up 
_without increasing server resources_. What tools/methods would you use to pinpoint the bottleneck?

**NOTE**: This question assumes a certain level of familiarity with Laravel (specifically the Eloquent ORM). If you
are not familiar with Laravel or the Eloquent ORM, please take a few minutes to review the documentation so you have
a better understanding.

**BONUS POINTS**: Refactor the offending method(s) with something more performant.

**ALTERNATIVE**: Instead of answering this question, you may provide us with a link to a Git repository that houses
a project you feel accurately demonstrates your current skill level.
