{assign newStr1 $str1|lower|replace:'ucertify':'uCertify'|truncate:30:false}
{assign newStr2 $str2|lower|replace:'ucertify':'uCertify'|truncate:30:false}
{$newStr1|cat:$newStr2}