<?php

    class RepeatCountGenerator
    {
        function makeRepeatCount($input_word, $input_sentence)
        {
            {
                $lowecase_user_inpute = strtolower($input_word);
                $lowercase_sentence = strtolower($input_sentence);
                $userinput_array = explode(" ", $lowercase_sentence);
                $count= 0;

            foreach ($userinput_array as $users)
               if ($lowecase_user_inpute == $users) {
                $count+= 1;
            }
            return $count;
        }
    }
}

?>
