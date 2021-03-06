var classes = [
    {
        "name": "App\\Models\\Books",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [],
        "nbMethodsIncludingGettersSetters": 0,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [
            "Illuminate\\Database\\Eloquent\\Model"
        ],
        "parents": [
            "Illuminate\\Database\\Eloquent\\Model"
        ],
        "lcom": 0,
        "length": 2,
        "vocabulary": 2,
        "volume": 2,
        "difficulty": 0,
        "effort": 0,
        "level": 2,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 4,
        "number_operators": 0,
        "number_operands": 2,
        "number_operators_unique": 0,
        "number_operands_unique": 2,
        "cloc": 15,
        "loc": 23,
        "lloc": 8,
        "mi": 125.52,
        "mIwoC": 78.06,
        "commentWeight": 47.47,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 0,
        "relativeSystemComplexity": 0,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 0,
        "totalSystemComplexity": 0,
        "package": "App\\Models\\",
        "pageRank": 0.05,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Models\\Dice\\Dice",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "roll",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "lastRoll",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 1,
        "nbMethodsSetters": 0,
        "wmc": 3,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [],
        "parents": [],
        "lcom": 1,
        "length": 15,
        "vocabulary": 7,
        "volume": 42.11,
        "difficulty": 2.2,
        "effort": 92.64,
        "level": 0.45,
        "bugs": 0.01,
        "time": 5,
        "intelligentContent": 19.14,
        "number_operators": 4,
        "number_operands": 11,
        "number_operators_unique": 2,
        "number_operands_unique": 5,
        "cloc": 12,
        "loc": 31,
        "lloc": 19,
        "mi": 101.67,
        "mIwoC": 60.6,
        "commentWeight": 41.07,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 2.33,
        "relativeSystemComplexity": 2.33,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 7,
        "totalSystemComplexity": 7,
        "package": "App\\Models\\Dice\\",
        "pageRank": 0.5,
        "afferentCoupling": 1,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "App\\Models\\Dice\\DiceHand",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "rollHand",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setValues",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getValues",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "changeValuesArray",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "resetValuesArray",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "sum",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "resetHandScore",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 8,
        "nbMethods": 7,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 7,
        "nbMethodsGetter": 1,
        "nbMethodsSetters": 0,
        "wmc": 13,
        "ccn": 6,
        "ccnMethodMax": 2,
        "externals": [
            "App\\Models\\Dice\\Dice"
        ],
        "parents": [],
        "lcom": 1,
        "length": 89,
        "vocabulary": 12,
        "volume": 319.06,
        "difficulty": 21.07,
        "effort": 6723.09,
        "level": 0.05,
        "bugs": 0.11,
        "time": 374,
        "intelligentContent": 15.14,
        "number_operators": 30,
        "number_operands": 59,
        "number_operators_unique": 5,
        "number_operands_unique": 7,
        "cloc": 8,
        "loc": 68,
        "lloc": 60,
        "mi": 68.21,
        "mIwoC": 42.87,
        "commentWeight": 25.34,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 9,
        "relativeDataComplexity": 1.28,
        "relativeSystemComplexity": 10.28,
        "totalStructuralComplexity": 72,
        "totalDataComplexity": 10.25,
        "totalSystemComplexity": 82.25,
        "package": "App\\Models\\Dice\\",
        "pageRank": 0.18,
        "afferentCoupling": 1,
        "efferentCoupling": 1,
        "instability": 0.5,
        "violations": {}
    },
    {
        "name": "App\\Models\\Dice\\DiceResults",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [],
        "nbMethodsIncludingGettersSetters": 0,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [
            "Illuminate\\Database\\Eloquent\\Model"
        ],
        "parents": [
            "Illuminate\\Database\\Eloquent\\Model"
        ],
        "lcom": 0,
        "length": 2,
        "vocabulary": 2,
        "volume": 2,
        "difficulty": 0,
        "effort": 0,
        "level": 2,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 4,
        "number_operators": 0,
        "number_operands": 2,
        "number_operators_unique": 0,
        "number_operands_unique": 2,
        "cloc": 21,
        "loc": 29,
        "lloc": 8,
        "mi": 126.47,
        "mIwoC": 78.06,
        "commentWeight": 48.41,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 0,
        "relativeSystemComplexity": 0,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 0,
        "totalSystemComplexity": 0,
        "package": "App\\Models\\Dice\\",
        "pageRank": 0.05,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Models\\Dice\\Game",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "processPlayersArrays",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "throwAgain",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getPlayersHands",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "playersHandSum",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "firstPlayer",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "checkIfNumberOneIsInHand",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "playerHand",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "moveToNextPlayer",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "returnPlayerToStart",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "playerRoundSum",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "savePlayerResults",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "playersFinalSum",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "winner",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "saveButtonVisibility",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "oneWhenSaveButtonIsVisible",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "playButtonVisibility",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 17,
        "nbMethods": 16,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 16,
        "nbMethodsGetter": 1,
        "nbMethodsSetters": 0,
        "wmc": 46,
        "ccn": 30,
        "ccnMethodMax": 6,
        "externals": [
            "App\\Models\\Dice\\DiceHand"
        ],
        "parents": [],
        "lcom": 1,
        "length": 449,
        "vocabulary": 58,
        "volume": 2630.23,
        "difficulty": 50.23,
        "effort": 132123.36,
        "level": 0.02,
        "bugs": 0.88,
        "time": 7340,
        "intelligentContent": 52.36,
        "number_operators": 161,
        "number_operands": 288,
        "number_operators_unique": 15,
        "number_operands_unique": 43,
        "cloc": 51,
        "loc": 247,
        "lloc": 196,
        "mi": 54.38,
        "mIwoC": 22.01,
        "commentWeight": 32.36,
        "kanDefect": 1.2,
        "relativeStructuralComplexity": 81,
        "relativeDataComplexity": 2.66,
        "relativeSystemComplexity": 83.66,
        "totalStructuralComplexity": 1377,
        "totalDataComplexity": 45.3,
        "totalSystemComplexity": 1422.3,
        "package": "App\\Models\\Dice\\",
        "pageRank": 0.05,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Models\\Guess\\Guess",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "random",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "tries",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "number",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "makeGuess",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "checkGuess",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 6,
        "nbMethods": 5,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 5,
        "nbMethodsGetter": 1,
        "nbMethodsSetters": 0,
        "wmc": 14,
        "ccn": 9,
        "ccnMethodMax": 4,
        "externals": [],
        "parents": [],
        "lcom": 1,
        "length": 71,
        "vocabulary": 23,
        "volume": 321.17,
        "difficulty": 16.92,
        "effort": 5435.23,
        "level": 0.06,
        "bugs": 0.11,
        "time": 302,
        "intelligentContent": 18.98,
        "number_operators": 27,
        "number_operands": 44,
        "number_operators_unique": 10,
        "number_operands_unique": 13,
        "cloc": 45,
        "loc": 98,
        "lloc": 53,
        "mi": 86.99,
        "mIwoC": 43.62,
        "commentWeight": 43.37,
        "kanDefect": 0.64,
        "relativeStructuralComplexity": 9,
        "relativeDataComplexity": 1.71,
        "relativeSystemComplexity": 10.71,
        "totalStructuralComplexity": 54,
        "totalDataComplexity": 10.25,
        "totalSystemComplexity": 64.25,
        "package": "App\\Models\\Guess\\",
        "pageRank": 0.05,
        "afferentCoupling": 0,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "App\\Models\\Guess\\GuessException",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [],
        "nbMethodsIncludingGettersSetters": 0,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [
            "Exception"
        ],
        "parents": [
            "Exception"
        ],
        "lcom": 0,
        "length": 0,
        "vocabulary": 0,
        "volume": 0,
        "difficulty": 0,
        "effort": 0,
        "level": 0,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 0,
        "number_operators": 0,
        "number_operands": 0,
        "number_operators_unique": 0,
        "number_operands_unique": 0,
        "cloc": 3,
        "loc": 7,
        "lloc": 4,
        "mi": 213.45,
        "mIwoC": 171,
        "commentWeight": 42.45,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 0,
        "relativeSystemComplexity": 0,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 0,
        "totalSystemComplexity": 0,
        "package": "App\\Models\\Guess\\",
        "pageRank": 0.05,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Models\\User",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [],
        "nbMethodsIncludingGettersSetters": 0,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [
            "Illuminate\\Foundation\\Auth\\User"
        ],
        "parents": [
            "Illuminate\\Foundation\\Auth\\User"
        ],
        "lcom": 0,
        "length": 7,
        "vocabulary": 6,
        "volume": 18.09,
        "difficulty": 0,
        "effort": 0,
        "level": 1.71,
        "bugs": 0.01,
        "time": 0,
        "intelligentContent": 31.02,
        "number_operators": 0,
        "number_operands": 7,
        "number_operators_unique": 0,
        "number_operands_unique": 6,
        "cloc": 15,
        "loc": 23,
        "lloc": 8,
        "mi": 118.83,
        "mIwoC": 71.36,
        "commentWeight": 47.47,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 0,
        "relativeSystemComplexity": 0,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 0,
        "totalSystemComplexity": 0,
        "package": "App\\Models\\",
        "pageRank": 0.05,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    }
]