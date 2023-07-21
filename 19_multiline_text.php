<?php

$weather = 'sunny';

// HEREDOC = ""
// NOWDOC = ''

$text = <<< HEREDOC
Today is a $weather day,
it's a good day to swim
and have fun.
HEREDOC;

echo nl2br($text); // break on new lines in code
echo '<br>'.'<br>';
echo htmlspecialchars(nl2br($text)); // handle html as string
echo '<br>'.'<br>';
echo html_entity_decode(htmlspecialchars(nl2br($text))); // handle html as html
