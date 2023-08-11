<h2>Lower Case</h2>
<p><b>String 1: </b>{$str1|lower:true}</p>
<p><b>String 2: </b>{$str2|lower:true}</p>
<br/>

<h2>Replace 'ucertify' with 'uCertify'</h2>
<p><b>String 1: </b>{$str1|replace:'ucertify':'uCertify'}</p>
<p><b>String 2: </b>{$str2|replace:'ucertify':'uCertify'}</p>
<br />

<h2>Wrapping Strings with 30 char</h2>
<p><b>String 1: </b>{$str1|truncate:30:false}</p>
<p><b>String 2: </b>{$str2|truncate:30:false}</p>
<br />

<h2>Merging Both Strings</h2>
<p>{$str1|cat:$str2}</p>
