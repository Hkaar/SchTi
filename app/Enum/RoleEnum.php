<?php

namespace App\Enum;

enum RoleEnum: int {
    case Admin = 1;
    case Operator = 2;
    case Teacher = 3;
    case StudentCounselor = 4;
    case Headmaster = 5;
    case Student = 6;
}