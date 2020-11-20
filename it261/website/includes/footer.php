<footer>
<ul>
  <li>Copyright &copy; <?php 
  $startDate = 2020;
  $currentDate = date('Y');

  if ($startDate == $currentDate){
    echo $currentDate;
  }else {
    echo ''.$startDate.'-'.$currentDate.'';
  }
  
  
  ?></li>
  <li>All Right Reserved</li>
  <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fwww.quintanigal.com%2Fit261%2Fwebsite%2F">HTML</a></li>
  <li><a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fvalidator.w3.org%2Fnu%2F%3Fdoc%3Dhttp%253A%252F%252Fwww.quintanigal.com%252Fit261%252Fwebsite%252F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">CSS</a></li>
  <li><a href = "https://github.com/sebastianquintana/it261/tree/main/it261">Github</a></li>
  <li><a href="">Web Design by Sebastian</a></li>

</ul>

</footer>
</div><!--end of the wrapper-->
</body>
</html>