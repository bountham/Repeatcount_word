<?php

    require_once "src/RepeatCountGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeCount_oneletter()
        {
            //Arrange
            $test_RepeatCountGenerator = new RepeatCountGenerator;
            $input_word = "t";
            $input_sentence = "t";

            //Act
            $result = $test_RepeatCountGenerator->makeRepeatCount($input_word, $input_sentence);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_makeCount_wordMathc()
        {
            //Arrange
            $test_RepeatCountGenerator = new RepeatCountGenerator;
            $input_word = "home";
            $input_sentence = "home";

            //Act
            $result = $test_RepeatCountGenerator->makeRepeatCount($input_word, $input_sentence);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_makeCount_oneWord()
        {
            //Arrange
            $test_RepeatCountGenerator = new RepeatCountGenerator;
            $input_word = "home";
            $input_sentence = "run";

            //Act
            $result = $test_RepeatCountGenerator->makeRepeatCount($input_word, $input_sentence);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_makeCount_word()
        {
            //Arrange
            $test_RepeatCountGenerator = new RepeatCountGenerator;
            $input_word = "t";
            $input_sentence = "t t t a";

            //Act
            $result = $test_RepeatCountGenerator->makeRepeatCount($input_word, $input_sentence);

            //Assert
            $this->assertEquals(3, $result);
        }

        function test_makeCount_multiple()
        {
            //Arrange
            $test_RepeatCountGenerator = new RepeatCountGenerator;
            $input_word = "dog";
            $input_sentence = "what kinda the dog do you got and what dog kinda the dog";

            //Act
            $result = $test_RepeatCountGenerator->makeRepeatCount($input_word, $input_sentence);

            //Assert
            $this->assertEquals(3, $result);
        }

    }

?>
