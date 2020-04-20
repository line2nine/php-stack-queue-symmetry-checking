<?php

function symmetryChecking($str)
{
    $stack = new SplStack();
    $queue = new SplQueue();

    for ($i = 0; $i < strlen($str); $i++) {
        $stack->push(substr($str, $i, 1));
        $queue->enqueue(substr($str, $i, 1));
    }

    if (!$stack->isEmpty()) {
        if ($stack->pop() == $queue->dequeue()) {
            echo "Chuỗi có đối xứng";
        } else {
            echo "Chuỗi không đối xứng";
        }
    }
}