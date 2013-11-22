{
	s: <% $str|json %>,
	n: <% $num|json %>,
	b: <% $bool|json %>,
	a: <% $arr|@json %>,
	o: <% json os=$str on=$num ob=$bool oa=$arr %>,
	z: {  x: 1, y: 2 }
}
