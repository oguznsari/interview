<?php

class functions {
    public function matchArrays ($candidateArray, $actualArray) {

        $match = [];
        foreach ($candidateArray as $candidate) {
            foreach ($actualArray as $actual) {
                $matchCount = array_intersect(str_split(strtoupper($candidate)), str_split($actual));
                if (count($matchCount) >= strlen($actual) * 75 / 100) {
                    array_push($match, $actual);
                    break;
                }
            }
        }

        return $match;
    }
}