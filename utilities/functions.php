<?php

class functions
{
    public function matchArrays($candidateArray, $actualArray)
    {
        $match = [];
        foreach ($candidateArray as $candidate) {
            foreach ($actualArray as $actual) {
                $candArray = str_split(strtoupper($candidate));
                $actArray = str_split($actual);
                $matchCount = array_intersect($candArray, $actArray);
                $letterMatch = 0;
                foreach ($candArray as $key => $candLetter) {
                    if (in_array($candLetter, array_slice($actArray, max(0, $key - 1), 3))) {
                        $letterMatch++;
                    }
                }
                if ((count($matchCount) >= strlen($actual) * 75 / 100) && ($letterMatch >= strlen($actual) * 75 / 100)) {
                    array_push($match, $actual);
                    break;
                }
            }

        }
        return $match;
    }

    public function templateSubstitution($template, $data)
    {
        $placeholders = array_map(function ($placeholder) {
            return strtoupper("{{$placeholder}}");
        }, array_keys($data));

        return strtr($template, array_combine($placeholders, $data));
    }
}