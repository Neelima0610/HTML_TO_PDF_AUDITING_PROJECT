<?php
//Include autoloader

require_once 'dompdf/autoload.inc.php';

//refer the Dompdf namspace
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$note9;
$note8;
$supl;
$prod;
$mcust;
$ith;
$other1;
$note;
$tadp;
$note1;
$note2;
$note3;
$note4;
$note5;
$note6;
$tot1;
$tot2;
$note7;
$per1;
$per2;
$date;
$dp;
$ls;
$output = "<html><head><style>
      /** Define the margins of your page **/
       #header { position: fixed; right: 0px; top: -18px; text-align: center;border-top: 3px solid black;}
            #footer { position: fixed; right: 0px; bottom: 10px; text-align: right;border-top: 3px solid black;}
        #footer .page:after { content: counter(page, decimal); }
 @page { margin: 60px 30px 40px 60px; }

                header{
             position: fixed;
                top: -80px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                background-color: white;
                color: black;
                text-align: center;
                line-height: 35px;
                }
            footer {
                position: fixed; 
                bottom: -7px; 
                left: 0px; 
                right: 0px;
                height: 10px; 

                /** Extra personal styles **/
                background-color: white;
                color: black;
                text-align: left;
                line-height: 5px;
            }
            .page-break
            {
                page-break-before: always;
            }
            
  @font-face{
      font-family : trebuchet;
      src: url('dompdf/lib/fonts/Trebuchet MS.ttf');
  }
  @font-face{
      font-family : trebuchetb;
      src: url('dompdf/lib/fonts/Trebuchet MS Bold.ttf');
  }
  body{
      font-family : 'trebuchet';
  }
  #h
  {
      font-family : 'trebuchetb';
  }
 
table,th,td{ 
border : 1px solid black;
                                           border-collapse : collapse;
                                            
                                          }
                                          th
                                          {
                                            font-family : 'trebuchetb';   
                                          }
                                          td {
        white-space: pre-wrap; /* css-3 */
        white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
        white-space: -pre-wrap; /* Opera 4-6 */
        white-space: -o-pre-wrap; /* Opera 7 */
        word-wrap: break-word; /* Internet Explorer 5.5+ */
    }
                                         
           </style>
          
           </head><body>";
 $ser  = "localhost";
$user = "id10204674_db1";
$pass = "123456";
$dbname = "id10204674_db1";
$conn = new mysqli($ser,$user,$pass,$dbname);

if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}

$sql = "select * from auditing";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{																																									
         
        $output .=  '       
          <header><p id="h">'.$row['cname'].'</p>
        </header>
              <footer><p id="h">Stock audit report of '.$row['cname'].'</p>
        </footer>
    <div id="header"></div>
        <div id="footer">
        
    <p class="page">Page </p>
  </div> 
           <center><p id="h" style="text-size:17px;"><u>Stock & Receivables Audit Report</u>
            ';
}
//Database part
$ser  = "localhost";
$user = "id10204674_db1";
$pass = "123456";
$dbname = "id10204674_db1";
$conn = new mysqli($ser,$user,$pass,$dbname);

if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}

$sql = "select * from auditing";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{																															
   
    $output .= '<br><br>&nbsp;&nbsp;&nbsp;'.$row['cname'].'</p>'.$row['address'].'<br><p>'.$row['acname'].'</p></center>

--------------------------------------------------------------------------------------------------------------<center><h3>'.$row['date'].'</h3></center><table align="center"; width="50%"><tr><td id="h" style="font-size:18px;text-align:center;" colspan="3">Summary List</td></tr><tr><td id="h" style="font-size:18px;text-align:left;">Sl.No</td><td id="h" style="font-size:18px;text-align:left;">Particulars</td><td id="h" style="font-size:18px;text-align:left;">Page No</td></tr><tr><td style="text-align:center;height:30px;" >1</td><td style="text-align:center;">Company Profile</td><td style="text-align:center;">'.$row['pageno1'].'</td></tr><tr><td style="text-align:center;" >2</td><td style="text-align:center;">Executive Summary</td><td style="text-align:center;">'.$row['pageno2'].'</td></tr><tr><td style="text-align:center;height:30px;" >3</td><td style="text-align:center;">Inventory Control</td><td style="text-align:center;">'.$row['pageno3'].'</td></tr><tr><td style="text-align:center;height:30px;" >4</td><td style="text-align:center;">Book Keeping</td><td style="text-align:center;">'.$row['pageno4'].'</td></tr><tr><td style="text-align:center;height:30px;" >5</td><td style="text-align:center;">Insurance Coverage</td><td style="text-align:center;">'.$row['pageno5'].'</td></tr><tr><td style="text-align:center;height:30px;" >6</td><td style="text-align:center;">Drawing Power</td><td style="text-align:center;">'.$row['pageno6'].'</td></tr><tr><td style="text-align:center;height:30px;" >7</td><td style="text-align:center;">Banking Conduct</td><td style="text-align:center;">'.$row['pageno7'].'</td></tr><tr><td style="text-align:center;height:30px;" >8</td><td style="text-align:center;">Financial Information</td><td style="text-align:center;">'.$row['pageno8'].'</td></tr><tr><td style="text-align:center;height:30px;" >9</td><td style="text-align:center;">Annexures</td><td style="text-align:center;">'.$row['pageno9'].'</td></tr>';
    
    
}																																																	
$output .= '</table>';

$sql = "select * from book_keeping";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{
 $note9 =  $row['qstn4'];
}

$sql = "select * from dpc";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{
    if($row['tadp']>0)
    {
    $note = '1.Drawing power as on '.date_format(new DateTime($row['date1']),"d.m.Y"). ' Rs. '.$row['tadp'].' Lakhs against the sanctioned limits of Rs.'.$row['ls'].'Lakhs showing an '.$row['aa'].' drawing power';
    }
    else
    {
        $tadp = abs($row['tadp']);
      $note = '1.Drawing power as on '.date_format(new DateTime($row['date1']),"d.m.Y"). ' Rs. -('.$tadp.') Lakhs against the sanctioned limits of Rs.'.$row['ls'].' Lakhs showing an '.$row['aa'].' drawing power';
     
    }
   
}
$sql = "select * from FI";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{ 
      $tot1 = $row['tota']-$row['saud1'];
    if($tot1>0)
    {
        $per1 = ($tot1/$row['tota'])*100;
    }
    else
    {
          $per1 = ($tot1/$row['saud1'])*100;
    }
    $tot2 = $row['totb']-$row['tota'];
    if($tot2>0)
    {
        $per2 = ($tot2/$row['totb'])*100;
    }
    else
    {
          $per2 = ($tot2/$row['tota'])*100;
    }
    
    if($tot1>=0)
    {
        $per1 = abs($per1);
        
    $note5 = 'Sales for FY '.$row['year5'].' - '.$row['year6'].' (Rs. '.$row['tota'].' Lakhs) increased by '.round($per1,2).'% (Rs. '.$tot1.' Lakhs) over FY'.$row['year1'].' - '.$row['year2'].' (Rs. '.$row['saud1'].' Lakhs).';
    }
    else
    {
        $per1 = abs($per1);
        $tot1 = abs($tot1);
      $note5 = 'Sales for FY '.$row['year5'].' - '.$row['year6'].' (Rs. '.$row['tota'].' Lakhs) decreased by '.round($per1,2).'% (Rs. '.$tot1.' Lakhs) over FY'.$row['year1'].' - '.$row['year2'].' (Rs. '.$row['saud1'].' Lakhs).';
    
  
    }
    
    if($tot2>=0)
    {
        $per2 = abs($per2);
    $note6 = 'Sales for FY '.$row['year7'].' - '.$row['year8'].' (Rs. '.$row['totb'].' Lakhs) increased by '.round($per2,2).'% (Rs. '.$tot2.' Lakhs) over FY'.$row['year3'].' - '.$row['year4'].' (Rs. '.$row['tota'].' Lakhs).';
    }
    else
    {
         $per2 = abs($per2);
        $tot2 = abs($tot2);
      $note6 = 'Sales for FY '.$row['year7'].' - '.$row['year8'].' (Rs. '.$row['totb'].' Lakhs) decreased by '.round($per2,2).'% (Rs. '.$tot2.' Lakhs) over corresponding period of FY'.$row['year3'].' - '.$row['year4'].' (Rs. '.$row['tota'].' Lakhs).';
    
  
    }
  
}
$sql = "select * from company_profile";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{
   if(empty($row['products']))
    {
        
    }
    else
    {
        $prod = $row['products'] ;
    }
    if(empty($row['products2']))
    {
        
    }
    else
    {
        $prod .= nl2br("\n".$row['products2']) ;
    }
    if(empty($row['products3']))
    {
        
    }
    else
    {
        $prod .= nl2br("\n".$row['products3']) ;
    }
    if(empty($row['products4']))
    {
        
    }
    else
    {
        $prod .= nl2br("\n".$row['products4']) ;
    }
    if(empty($row['products5']))
    {
        
    }
    else
    {
        $prod .= nl2br("\n".$row['products5']) ;
    }
    if(empty($row['products6']))
    {
          
        
    }
    else
    {
        $prod .= nl2br("\n".$row['products6']);
    
    }
    if(empty($row['products7']))
    {
        
    }
    else
    {
        $prod .= nl2br("\n".$row['products7']);
    }
    if(empty($row['products8']))
    {
        
    }
    else
    {
        $prod .= nl2br("\n".$row['products8']) ;
    }
    if(empty($row['msupl']))
    {
        
    }
    else
    {
        $supl = $row['msupl'] ;
    }
    if(empty($row['msupl2']))
    {
        
    }
    else
    {
        $supl .= nl2br("\n".$row['msupl2']) ;
    }
    if(empty($row['msupl3']))
    {
        
    }
    else
    {
        $supl .= nl2br("\n".$row['msupl3']) ;
    }
    if(empty($row['msupl4']))
    {
        
    }
    else
    {
        $supl .= nl2br("\n".$row['msupl4']) ;
    }
    if(empty($row['msupl5']))
    {
        
    }
    else
    {
        $supl .= nl2br("\n".$row['msupl5']) ;
    }
    if(empty($row['msupl6']))
    {
          
        
    }
    else
    {
        $supl .= nl2br("\n".$row['msupl6']);
    
    }
    if(empty($row['msupl7']))
    {
        
    }
    else
    {
        $supl .= nl2br("\n".$row['msupl7']);
    }
    if(empty($row['msupl8']))
    {
        
    }
    else
    {
        $supl .= nl2br("\n".$row['msupl8']) ;
    }
    if(empty($row['mcost']))
    {
        
    }
    else
    {
        $mcust = $row['mcost'] ;
    }
    if(empty($row['mcost2']))
    {
        
    }
    else
    {
        $mcust .= nl2br("\n".$row['mcost2']) ;
    }
    if(empty($row['mcost3']))
    {
        
    }
    else
    {
        $mcust .= nl2br("\n".$row['mcost3']) ;
    }
    if(empty($row['mcost4']))
    {
        
    }
    else
    {
        $mcust .= nl2br("\n".$row['mcost4']) ;
    }
    if(empty($row['mcost5']))
    {
        
    }
    else
    {
        $mcust .= nl2br("\n".$row['mcost5']) ;
    }
    if(empty($row['mcost6']))
    {
          
        
    }
    else
    {
        $mcust .= nl2br("\n".$row['mcost6']);
    
    }
    if(empty($row['mcost7']))
    {
        
    }
    else
    {
        $mcust .= nl2br("\n".$row['mcost7']);
    }
    if(empty($row['mcost8']))
    {
        
    }
    else
    {
        $mcust .= nl2br("\n".$row['mcost8']) ;
    }
   if(empty($row['others']))
    {
        
    }
    else
    {
        $ith = $row['others'] ;
    }
    if(empty($row['others2']))
    {
        
    }
    else
    {
        $ith .= nl2br("\n".$row['others2']) ;
    }
    if(empty($row['others3']))
    {
        
    }
    else
    {
        $ith .= nl2br("\n".$row['others3']) ;
    }
    if(empty($row['others4']))
    {
        
    }
    else
    {
        $ith .= nl2br("\n".$row['others4']) ;
    }
    if(empty($row['others5']))
    {
        
    }
    else
    {
        $ith .= nl2br("\n".$row['others5']) ;
    }
    if(empty($row['others6']))
    {
          
        
    }
    else
    {
        $ith .= nl2br("\n".$row['others6']);
    
    }
     $output .= '<div class="page-break"></div>
    <p id="h" style="font-size:20px;text-align:left;">1.<u> Company Profile</u></p>
     <table align="center" width="100%" >
     <tr><td style="width:160px;height:40px;">Company Name</td><td ;>'.$row['cname'].'</td></tr>
     <tr><td style="width:160px;height:40px;">Office address</td><td>'.$row['ofaddress'].'</td></tr>
     <tr><td style="width:160px;height:40px;">Branch Address</td><td>'.$row['baddress'].'</td></tr>
     <tr><td style="width:160px;height:40px;">Existing Since</td><td>'.$row['since'].'</td></tr>
     <tr><td style="width:160px;height:40px;">Constitution</td><td>'.$row['const'].'</td></tr>
     <tr><td style="width:160px;height:40px;">'.$row['dis'].'</td><td>'.$row['prop'].''.$row['part'].''.$row['prlc'].''.$row['pulc'].'</td></tr>
     <tr><td style="width:160px;height:40px;">Nature of Business</td><td>'.$row['nob'].'</td></tr>
     <tr><td style="width:160px;height:40px;">Products</td><td>'.$prod.'</td></tr>
     <tr><td style="width:160px;height:40px;">Group/Sister Concerns</td><td>'.$row['concerns'].'</td></tr>
     <tr><td style="width:160px;height:40px;">Major Suppliers</td><td>'.$supl.'</td></tr>
     <tr><td style="width:160px;height:40px;">Major Customers</td><td>'.$mcust.'</td></tr>
     <tr><td style="width:160px;height:40px;">Others</td><td><ul><li>'.$note9.'</li><li>'.$note.'</li><li>'.$note5.'</li><li>'.$note6.'</li></ul></td></tr>
     
     </table>';

}
$sql = "select * from executive_summary";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{
    if(empty($row['others']))
    {
        
    }
    else
    {
        $other1 = $row['others'] ;
    }
    if(empty($row['others2']))
    {
        
    }
    else
    {
        $other1 .= nl2br("\n".$row['others2']) ;
    }
    if(empty($row['others3']))
    {
        
    }
    else
    {
        $other1 .= nl2br("\n".$row['others3']) ;
    }
    if(empty($row['others4']))
    {
        
    }
    else
    {
        $other1 .= nl2br("\n".$row['others4']) ;
    }
    if(empty($row['others5']))
    {
        
    }
    else
    {
        $other1 .= nl2br("\n".$row['others5']) ;
    }
    if(empty($row['others6']))
    {
          
        
    }
    else
    {
        $other1 .= nl2br("\n".$row['others6']);
    
    }
    
     $output .= '<div class="page-break"></div>
    <p id="h" style="font-size:20px;text-align:left;">2.<u>Executive Summary</u></p>
     <table align="center" width="100%" >
     <tr><td style="width:160px;height:40px;">Visited & Verified by</td><td ;>'.$row['visby'].'</td></tr>
     <tr><td style="width:160px;height:40px;">Whom he contacted &
his/her designation
</td><td>'.$row['who'].'</td></tr>
     <tr><td style="width:160px;height:40px;">Date of visit</td><td>'.$row['dov'].'</td></tr>
     <tr><td style="width:160px;height:40px;">Place of office visited</td><td>'.$row['pofv'].'</td></tr>
     <tr><td style="width:160px;height:40px;">Customer co-operation</td><td>'.$row['ccop'].'</td></tr>
     <tr><td style="width:160px;height:40px;">Facility Availed with<br>
'.$row['bank'].'Bank
</td><td><table width="100%"><tr><td id="h" style="font-size:18px;text-align:center;" colspan="2">Facility Sactioned details</td></tr>
<tr><td id="h" style="font-size:18px;text-align:left;">Cash Credits</td><td id="h" style="font-size:18px;text-align:left;">'.$row['cash'].'</td></tr><tr><td id="h" style="font-size:18px;text-align:left;">Term Loan</td><td>'.$row['term'].'</td></tr><tr><td id="h" style="font-size:18px;text-align:left;">Total</td><td id="h" style="font-size:18px;text-align:left;">'.$row['total'].'</td></tr></table></td></tr>
     <tr><td style="width:160px;height:40px;">Others</td><td>'.$other1.'</td></tr>
     
     </table>';
     
}
$sql = "select * from inventory_control";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{
    
     $output .= '<div class="page-break"></div>
     <p id="h" style="font-size:20px;text-align:left;">3.<u>Inventory Control</u></p>
     <p id="h" style="font-size:18px;text-align:left;">A. Comments on Quantity & value of goods as on '.date_format(new DateTime($row['date1']),"d.m.Y").'</p>
     <table align="center";><tr><td id="h" style="font-size:18px;text-align:left;">Particulars</td><td id="h" style="font-size:18px;text-align:left;">Value(in Lakhs)</td></tr><tr><td style-"text-align:center;">Raw materials & Packing materials</td><td>'.$row['raw'].'</td></tr>
     <tr><td style-"text-align:center;">Work in progress</td><td>'.$row['wip'].'</td></tr>
     <tr><td style-"text-align:center;">Finished Stock</td><td>'.$row['fs'].'</td></tr><tr><td ><p id="h" style="font-size:15px;text-align:left;">Total</p></td><td><p id="h" style-"text-align:left;">'.$row['total'].'</p></td></tr></table>
     <p id="h" style="font-size:18px;text-align:left;">B. Method of costing applied.</p>
     <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['qstn2'].'</p><p id="h" style="font-size:18px;text-align:left;">C. Whether stocks are properly stored. </p>
      <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['qstn3'].'</p><p id="h" style="font-size:18px;text-align:left;">D. Comments on holding level of inventory by the borrower company vis-à-vis
the industry. </p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['qstn4'].'</p><p id="h" style="font-size:18px;text-align:left;">E. Bifurcation of Closing Stock at various locations/god owns as declared by
the borrower:</p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['qstn5'].'</p><p id="h" style="font-size:18px;text-align:left;">F. Observation on marketability & salability of stock.</p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['qstn6'].'</p><p id="h" style="font-size:18px;text-align:left;">G. Manufacturing process in brief. </p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['qstn7'].'</p><p id="h" style="font-size:18px;text-align:left;">H. Whether the Borrower holds any stock received for processing (job work)
and whether they are separately stored - Please Comment.</p><p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['qstn8'].'</p><p id="h" style="font-size:18px;text-align:left;">I. If so, whether it is so declared and deducted from the total stock. Please
Comment.</p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['qstn9'].'</p><p id="h" style="font-size:18px;text-align:left;"><b>J. Whether consumption of Raw materials is commensurate with production
activity & other production expenses. </b></p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['qstn10'].'</p><p id="h" style="font-size:18px;text-align:left;">K. Brief comments on description of production activity, whether there were
any special events like, breakdown in production activity, loss of materials
and other relevant issues, which are relevant to the financing, bank.</p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['qstn11'].'</p>';
     
}
$sql = "select * from book_keeping";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{
    $note9 = $row['qstn4'];
     $output .= '<div class="page-break"></div>
     <p id="h" style="font-size:18px;text-align:left;">4.<u>Book Keeping</u></p><p id="h" style="font-size:18px;text-align:left;">A. If the data is stored in computer system, the safety features/measures in
force to prevent any manipulative corrections / changes to be commented
upon</p>
     <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['qstn1'].'</p><p id="h" style="font-size:18px;text-align:left;">B. Any qualifying comment of the statutory auditors of the company regarding
maintenance of books of accounts and Accounting policy adopted by the
Borrower. This should be commented.
 </p>
      <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['qstn2'].'</p><p id="h" style="font-size:18px;text-align:left;">C. Whether borrowers record maintenance of Stock and Accounting is
satisfactory. Please comment whether there are any deficiencies.</p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['qstn3'].'</p><p id="h" style="font-size:18px;text-align:left;">D. Whether stock book is maintained up to date. Please Comment.</p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['qstn4'].'</p><p id="h" style="font-size:18px;text-align:left;">E. Whether purchase/sale invoices are verified. Whether valuation of
purchase is correct whether overvaluation of purchase is done. Please
Comment.</p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['qstn5'].'</p><p id="h" style="font-size:18px;text-align:left;">F. Whether there are any purchases from allied /sister firms. Whether all such
transactions are genuine? Please Comment.</p><p style="text-size:20px;text-align:left;">&nbsp;'.$row['qstn6'].'</p>';

}
$sql = "select * from insurance_coverage";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{
     $output .= '<div class="page-break"></div>
                 <p id="h" style="font-size:18px;text-align:left;">5.<u>Insurance Coverage</u></p>
                 <table ><tr><td id="h" style="font-size:18px;text-align:center;">Name of the <br>Insurance <br>Company<br></td><td id="h" style="font-size:18px;text-align:center;">Location of<br>Risk covered</td><td id="h" style="font-size:18px;text-align:center;">Valid upto</td><td id="h" style="font-size:18px;text-align:center;">Policy Number</td><td id="h" style="font-size:18px;text-align:center;">Asset covered</td><td id="h" style="font-size:18px;text-align:center;">Insured amount</td></tr>
           <tr>
           <td style="text-align:center;">'.$row['noic'].'</td>
           <td style="text-align:center;">'.$row['lorc'].'</td>
           <td style="text-align:center;">'.$row['valid'].'</td>
           <td style="text-align:center;">'.$row['pn'].'</td>
           <td style="text-align:center;">'.$row['asset'].'</td>
           <td style="text-align:center;">'.$row['insure'].'</td>
           </tr>
           
           
           </table>';
}   
$sql = "select * from dpc";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{
     if($row['tadp']>0)
    {
    $note = '1.Drawing power as on '.date_format(new DateTime($row['date1']),"d.m.Y"). ' Rs. '.$row['tadp'].' Lakhs against the sanctioned limits of Rs.'.$row['ls'].'Lakhs showing an '.$row['aa'].' drawing power';
    }
    else
    {
        $tadp = abs($row['tadp']);
      $note = '1.Drawing power as on '.date_format(new DateTime($row['date1']),"d.m.Y"). ' Rs. -('.$tadp.') Lakhs against the sanctioned limits of Rs.'.$row['ls'].' Lakhs showing an '.$row['aa'].' drawing power';
     
    }
   
   $dp = $row['tadp'];
   $ls = $row['ls'];
   $date = date_format(new DateTime($row['date1']),"d.m.Y");
   if($dp<$ls)
   {
     $note8 = 'The DP as on '.$date.' was Rs '.$dp.' lakhs against the sanction limit Rs. '.$ls.' lakhs
     (Only CC) therefore DP was inadequate.';
   }
   else
   {
      $note8 = 'The DP as on '.$date.' was Rs '.$dp.' lakhs against the sanction limit Rs. '.$ls.' lakhs
     (Only CC) therefore DP was Adequate.';
   }
     $output .= '<div class="page-break"></div>
                 <p id="h" style="font-size:18px;text-align:left;">6.<u>Drawing Power Computation</u></p>
                 <p id="h" style="font-size:18px;text-align:left;">A.Margin</h4>
                 &nbsp; <p id="h" style="font-size:18px;text-align:left;">. Net Paid Stock : '.$row['nps'].'%</h4> 
                 &nbsp; <p id="h" style="font-size:18px;text-align:left;">. Debtors        : '.$row['debp'].'%</h4>
                 <p id="h" style="font-size:18px;text-align:left;">B.Drawing Power as on '.date_format(new DateTime($row['date1']),"d.m.Y").'</p>
                 <table>
                    <tr><td id="h" style="font-size:18px;text-align:left;">Nature of security</td><td id="h" style="font-size:18px;text-align:left;"><u>Rupees (in Lakhs)</u></td></tr>
                    <tr><td style="font-size:18px;height:30px;text-align:left;">Stocks</td><td style="height:30px;text-align:right;font-size:20px;">'.$row['stock'].'</td></tr>
                    <tr><td style="font-size:18px;height:30px;text-align:left;">Creditors</td><td style="height:30px;text-align:right;font-size:20px;">'.$row['cred'].'</td></tr>
                    <tr><td style="font-size:18px;height:30px;text-align:left;">Total paid stock</td><td style="height:30px;text-align:right;font-size:20px;">'.$row['tps'].'</td></tr>
                    <tr><td style="font-size:18px;height:30px;text-align:left;"> <p style="font-size:18px;text-align:left;">'.$row['pst'].'</td><td style="height:30px;text-align:right;font-size:20px;">'.$row['mops'].'</td></tr>
                    <tr><td style="font-size:18px;height:30px;text-align:left;">Available Drawing Power against Inventory (A)</td><td style="height:30px;text-align:right;font-size:20px;">'.$row['dpA'].'</td></tr>
                    <tr><td style="font-size:18px;height:30px;text-align:left;">Debtors</td><td style="height:30px;text-align:right;font-size:20px;">'.$row['deb'].'</td></tr>
                    <tr><td style="font-size:18px;height:30px;text-align:left;"> <p style="font-size:18px;text-align:left;">'.$row['dep'].'</td><td style="height:30px;text-align:right;font-size:20px;">'.$row['mods'].'</td></tr>
                    <tr><td  style="font-size:18px;height:30px;text-align:left;">Available Drawing Power against Debtors (B)</td><td style="height:30px;text-align:right;font-size:20px;">'.$row['dpB'].'</td></tr>
                    <tr><td id="h" style="font-size:18px;height:30px;text-align:left;">Total Available Drawing Power = (A) + (B)</td><th style="height:30px;text-align:right;font-size:20px;">'.$row['tadp'].'</td></tr>
                    <tr><td id="h" style="font-size:18px;height:30px;text-align:left;">Limit Sanctioned</td><th style="height:50px;text-align:right;font-size:20px;">'.$row['ls'].'</td></tr>
                    <tr><td id="h" style="font-size:18px;height:30px;text-align:left;">Adequate/Inadequate</td><td id="h" style="font-size:18px;height:30px;text-align:right;">'.$row['aa'].'</td></tr>
                 </table>
                     &nbsp; &nbsp; &nbsp;<p id="h" style="font-size:20px;text-align:left;">Note:</p>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$note.'</p>';
             
     
} 
$sql = "select * from dpc";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{ 
        $output .= '
       <p id="h" style="font-size:18px;text-align:left;">C.Stock</p>
        <table width="80%">
        <tr><td>1.Total stock as per point no 3A </td><td style="text-align:right;">'.$row['stk1'].'</td></tr>
        <tr><td>2.Obsolete stock value</td><td style="text-align:right;">'.$row['stk2'].'</td></tr>
        <tr><td>3.Stock received for job work</td><td style="text-align:right;">'.$row['stk3'].'</td></tr>
        <tr><td id="h" style="font-size:18px;text-align:left;">Total stock for drawing power(1-2-3) </td><th style="text-align:right;">'.$row['sttot'].'</td></tr>
        </table>
        ';
}
$sql = "select * from dpc";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{ 
        $output .= '
      <p id="h" style="font-size:18px;text-align:left;">D. Creditors</p>
        <table width="80%">
        <tr><td>1.Total creditors </td><td style="text-align:right;">'.$row['cred1'].'</td></tr>
        <tr><td>2.Credit balance in debtors</td><td style="text-align:right;">'.$row['cred2'].'</td></tr>
        <tr><td>3.Less financial creditors</td><td style="text-align:right;">'.$row['cred3'].'</td></tr>
        <tr><td id="h" style="font-size:18px;text-align:left;">Total creditors for drawing power(1+2-3)</td><th style="text-align:right;">'.$row['credtot'].'</td></tr>
        </table>
        ';
}
$sql = "select * from dpc";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{ 
        $output .= '
        <p id="h" style="font-size:18px;text-align:left;">E. Debtors</p>
        <table width="80%">
        <tr><td>1.Total debtors</td><td style="text-align:right;">'.$row['deb1'].'</td></tr>
        <tr><td>2.Debit balance in creditors</td><td style="text-align:right;">'.$row['deb2'].'</td></tr>
        <tr><td>3.Debtors pending >credit period</td><td style="text-align:right;">'.$row['deb3'].'</td></tr>
        <tr><td>4.Financial debtors</td><td style="text-align:right;">'.$row['deb4'].'</td></tr>
        <tr><td id="h" style="font-size:18px;text-align:left;">Total debtors for drawing power(1+2-3-4) </td><th style="text-align:right;">'.$row['debtot'].'</td></tr>
        </table>
        ';
}

$sql = "select * from dpc";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{ 
        $output .= '
        <p id="h" style="font-size:18px;text-align:left;">F. Debtors ageing analysis.</p>
        <table width="80%">
        <tr><td>1.lessthan 90 days </td><td style="text-align:right;">'.$row['dag1'].'</td></tr>
        <tr><td>2.Greatherthan 90 and lessthan 180 days</td><td style="text-align:right;">'.$row['dag2'].'</td></tr>
        <tr><td>3.Greaterthan 180 days</td><td style="text-align:right;">'.$row['dag3'].'</td></tr>
        <tr><td>4.On Account Debtors</td><td style="text-align:right;">'.$row['dag4'].'</td></tr>
        <tr><td id="h" style="font-size:18px;text-align:left;">Total debtors (1+2+3+4)</td><th style="text-align:right;">'.$row['dagtot'].'</td></tr>
        </table>
       <p id="h" style="font-size:18px;text-align:left;"> G. Details of party-wise outstanding (whether outstanding of any particular
debtor is in excess of 5% of the total debtors.)  </p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['g'].'</p>
 <p id="h" style="font-size:18px;text-align:left;"> H. Book debts identified as recoverable.  </p> <p id="h" style="font-size:15px;text-align:left;">Doubtful of recovery : '.$row['h1'].'</p><p id="h" style="font-size:15px;text-align:left;">Bad Debts    :'.$row['h2'].'</p>
 <p id="h" style="font-size:18px;text-align:left;">I Collection machinery put in place: </p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['i'].'</p>
 <p id="h" style="font-size:18px;text-align:left;">J. Whether the borrower has provided for doubtful recovery of book debts </p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['j'].'</p>
 <p id="h" style="font-size:18px;text-align:left;">K. Whether there are any disputes in respect of book debts. </p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['k'].'</p>
 <p id="h" style="font-size:18px;text-align:left;">L. Have you located any discrepancy on verification of books of accounts?</p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['l'].'</p>
 <p id="h" style="font-size:18px;text-align:left;">M. Whether there are inter-company/intra-company debtors. Whether all
the debtors are arising out of commercial transactions?</p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['m'].'</p>
<br><br><div class="page-break"></div>
<p id="h" style="font-size:18px;text-align:left;">7.<u>Banking Conduct</u></p>
<p id="h" style="font-size:18px;text-align:left;">Facility Availed with '.$row['bank'].'bank &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs(in lakhs)</p>
   <table width="60%">
   <tr><td id="h" style="font-size:18px;text-align:center;">Facility</td><td id="h" style="font-size:18px;text-align:center;">Limit</td></tr>
   <tr><td style="text-align:center;">Cash Credits</td><td style="text-align:center;">'.$row['cc'].'</td></tr>
   <tr><td id="h" style="font-size:18px;text-align:center;">Total</td><td id="h" style="font-size:18px;text-align:center;">'.$row['total'].'</td></tr>
   </table>
        ';
}
$sql = "select * from cc";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{ 
 $output .=' 
   <p id="h" style="font-size:18px;text-align:left;">A CC Account Details</p>
   <table width="80%"><tr>
       <td id="h" style="font-size:18px;text-align:center;">Month</td><td id="h" style="font-size:18px;text-align:center;">Deposits</td><td id="h" style="font-size:18px;text-align:center;">Sales</td><td id="h" style="font-size:18px;text-align:center;">% of <br> deposits on<br>sales</td></tr>
       <tr><td style="text-align:center;">'.date_format(new DateTime($row['mn1']),'F').'</td><td style="text-align:center;">'.$row['dep1'].'</td><td style="text-align:center;">'.$row['sale1'].'</td><td style="text-align:center;">'.$row['depg1'].'</td></tr>
        <tr><td style="text-align:center;">'.date_format(new DateTime($row['mn2']),'F').'</td><td style="text-align:center;">'.$row['dep2'].'</td><td style="text-align:center;">'.$row['sale2'].'</td><td style="text-align:center;">'.$row['depg2'].'</td></tr>
        <tr><td style="text-align:center;">'.date_format(new DateTime($row['mn3']),'F').'</td><td style="text-align:center;">'.$row['dep3'].'</td><td style="text-align:center;">'.$row['sale3'].'</td><td style="text-align:center;">'.$row['depg3'].'</td></tr>
        <tr><td style="text-align:center;">'.date_format(new DateTime($row['mn4']),'F').'</td><td style="text-align:center;">'.$row['dep4'].'</td><td style="text-align:center;">'.$row['sale4'].'</td><td style="text-align:center;">'.$row['depg4'].'</td></tr>
   </table>
   &nbsp;&nbsp;&nbsp;
   <p id="h" style="font-size:18px;text-align:left;">Note:</p>
   '.$row['note'].'<p id="h" style="font-size:18px;text-align:left;">B. Whether sales proceeds are routed in the account. Please comment. If not routed, the reasons are to be enquired and commented in the report.</p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['b7'].'</p>
<p id="h" style="font-size:18px;text-align:left;">C. Whether purchase commitment is met by issue of cheque on CC/CA. Please comment.  </p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['c7'].'</p>
<p id="h" style="font-size:18px;text-align:left;">D. Comment on accounts - conduct with other consortium banks/banks under multiple banking arrangements. </p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['d7'].'</p>
<p id="h" style="font-size:18px;text-align:left;">E. Comments on account with any other banks/any diversion of funds if no diversion is observed, specific comment should be made. </p> <p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['e7'].'</p>
<p id="h" style="font-size:18px;text-align:left;">H. Whether Banks hypothecation board is displayed.</p><p style="text-size:20px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['f7'].'</p></font>';
}
$sql = "select * from FI";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{ 
    if($row['sin']>=0)
    {
    $note1 = 'Sales for FY '.$row['year1'].' - '.$row['year2'].' (Rs. '.$row['saud1'].' Lakhs) increased by '.$row['sinp'].'% (Rs. '.$row['sin'].' Lakhs) over FY'.$row['year3'].' - '.$row['year4'].' (Rs. '.$row['saud2'].' Lakhs).';
    }
    else
    {
        $note1 = 'Sales for FY '.$row['year1'].' - '.$row['year2'].' (Rs. '.$row['saud1'].' Lakhs) decreased by '.$row['sinp'].'% (Rs. '.$row['sin'].' Lakhs) over FY'.$row['year3'].' - '.$row['year4'].' (Rs. '.$row['saud2'].' Lakhs).';
  
    }
    
    if($row['din']>=0)
    {
    $note2 = 'Debtors for FY '.$row['year1'].' - '.$row['year2'].' (Rs. '.$row['daud1'].' Lakhs) increased by '.$row['dinp'].'% (Rs. '.$row['din'].' Lakhs) over FY'.$row['year3'].' - '.$row['year4'].' (Rs. '.$row['daud2'].' Lakhs).';
    }
    else
    {
        $note2 = 'Debtors for FY '.$row['year1'].' - '.$row['year2'].' (Rs. '.$row['daud1'].' Lakhs) decreased by '.$row['dinp'].'% (Rs. '.$row['din'].' Lakhs) over FY'.$row['year3'].' - '.$row['year4'].' (Rs. '.$row['daud2'].' Lakhs).';
  
    }
    
    if($row['pin']>=0)
    {
    $note3 = 'Purchases for FY '.$row['year1'].' - '.$row['year2'].' (Rs. '.$row['paud1'].' Lakhs) increased by '.$row['pinp'].'% (Rs. '.$row['pin'].' Lakhs) over FY'.$row['year3'].' - '.$row['year4'].' (Rs. '.$row['paud2'].' Lakhs).';
    }
    else
    {
        $note3 = 'Purchases for FY '.$row['year1'].' - '.$row['year2'].' (Rs. '.$row['paud1'].' Lakhs) decreased by '.$row['pinp'].'% (Rs. '.$row['pin'].' Lakhs) over FY'.$row['year3'].' - '.$row['year4'].' (Rs. '.$row['paud2'].' Lakhs).';
  
    }
    if($row['crin']>=0)
    {
    $note4 = 'Creditors for FY '.$row['year1'].' - '.$row['year2'].' (Rs. '.$row['craud1'].' Lakhs) increased by '.$row['crinp'].'% (Rs. '.$row['crin'].' Lakhs) over FY'.$row['year3'].' - '.$row['year4'].' (Rs. '.$row['craud2'].' Lakhs).';
    }
    else
    {
        $note4 = 'Creditors for FY '.$row['year1'].' - '.$row['year2'].' (Rs. '.$row['craud1'].' Lakhs) decreased by '.$row['crinp'].'% (Rs. '.$row['crin'].' Lakhs) over FY'.$row['year3'].' - '.$row['year4'].' (Rs. '.$row['craud2'].' Lakhs).';
  
    }
    $tot1 = $row['tota']-$row['saud1'];
    if($tot1>0)
    {
        $per1 = ($tot1/$row['tota'])*100;
    }
    else
    {
          $per1 = ($tot1/$row['saud1'])*100;
    }
    $tot2 = $row['totb']-$row['tota'];
    if($tot2>0)
    {
        $per2 = ($tot2/$row['totb'])*100;
    }
    else
    {
          $per2 = ($tot2/$row['tota'])*100;
    }
    
    if($tot1>=0)
    {
        $per1 = abs($per1);
        
    $note5 = 'Sales for FY '.$row['year5'].' - '.$row['year6'].' (Rs. '.$row['tota'].' Lakhs) increased by '.round($per1,2).'% (Rs. '.$tot1.' Lakhs) over FY'.$row['year1'].' - '.$row['year2'].' (Rs. '.$row['saud1'].' Lakhs).';
    }
    else
    {
        $per1 = abs($per1);
        $tot1 = abs($tot1);
      $note5 = 'Sales for FY '.$row['year5'].' - '.$row['year6'].' (Rs. '.$row['tota'].' Lakhs) decreased by '.round($per1,2).'% (Rs. '.$tot1.' Lakhs) over FY'.$row['year1'].' - '.$row['year2'].' (Rs. '.$row['saud1'].' Lakhs).';
    
  
    }
    
    if($tot2>=0)
    {
        $per2 = abs($per2);
    $note6 = 'Sales for FY '.$row['year7'].' - '.$row['year8'].' (Rs. '.$row['totb'].' Lakhs) increased by '.round($per2,2).'% (Rs. '.$tot2.' Lakhs) over FY'.$row['year3'].' - '.$row['year4'].' (Rs. '.$row['tota'].' Lakhs).';
    }
    else
    {
         $per2 = abs($per2);
        $tot2 = abs($tot2);
      $note6 = 'Sales for FY '.$row['year7'].' - '.$row['year8'].' (Rs. '.$row['totb'].' Lakhs) decreased by '.round($per2,2).'% (Rs. '.$tot2.' Lakhs) over corresponding period of FY'.$row['year3'].' - '.$row['year4'].' (Rs. '.$row['tota'].' Lakhs).';
    
  
    }
    if($tot1>=0)
    {
        $per1 = abs($per1);
    $note7 = 'Based on the actual sales the turnover for the FY '.$row['year5'].' - '.$row['year6'].' would work out to (Rs. '.$row['tota'].' Lakhs) showing an increase of '.round($per1,2).'% (Rs. '.$tot1.' Lakhs) over FY'.$row['year1'].' - '.$row['year2'].' (Rs. '.$row['saud1'].' Lakhs).';
    }
    else
    { 
        $per1 = abs($per1);
        $tot1 = abs($tot1);
       $note7 = 'Based on the actual sales the turnover for the FY '.$row['year5'].' - '.$row['year6'].' would work out to (Rs. '.$row['tota'].' Lakhs) showing a decrease of '.$per1.'% (Rs. '.$tot1.' Lakhs) over FY'.$row['year1'].' - '.$row['year2'].' (Rs. '.$row['saud1'].' Lakhs).';
   
        
    }
    
 $output .='<div class="page-break"></div>           
           <p id="h" style="font-size:18px;text-align:left;"><u>8.Financial Information</u></p><br>
           <p id="h" style="font-size:18px;text-align:left;">A. Whether the turnover in the account is brisk, comparable with the past
levels/ operating levels. Please comment. (Rs in lakhs)</p><br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<table width="80%" >																																																																										
           <tr><td id="h" style="font-size:18px;text-align:center;">Particulars</td><td id="h" style="font-size:18px;width:100px;text-align:center;">Audit B/S<br>'.$row['year1'].'<br>-<br>'.$row['year2'].'</td><td id="h" style="font-size:18px;width:90px;text-align:center;">Audit B/S<br>'.$row['year3'].'<br>-<br>'.$row['year4'].'</td><td id="h" style="font-size:18px;width:90px;text-align:center;">Increase/<br>Decrease</td><td id="h" style="font-size:18px;width:100px;text-align:center;">Percentage of<br>Increase/<br>Decrease</th></tr>
           <tr>
               <td style="height:30px;text-align:center;">Sales</td>
           <td style="height:30px;text-align:center;">'.$row['saud1'].'</td>
           <td style="height:30px;text-align:center;">'.$row['saud2'].'</td>
           <td style="height:30px;text-align:center;">'.$row['sin'].'</td>
           <td style="height:30px;text-align:center;">'.$row['sinp'].'</td>
           </tr>
             <tr>
               <td style="height:30px;text-align:center;">Purchase</td>
           <td style="height:30px;text-align:center;">'.$row['paud1'].'</td>
           <td style="height:30px;text-align:center;">'.$row['paud1'].'</td>
           <td style="height:30px;text-align:center;">'.$row['pin'].'</td>
           <td style="height:30px;text-align:center;">'.$row['pinp'].'</td>
           </tr>
             <tr>
               <td style="height:30px;text-align:center;">Debtors</td>
           <td style="height:30px;text-align:center;">'.$row['daud1'].'</td>
           <td style="height:30px;text-align:center;">'.$row['daud1'].'</td>
           <td style="height:30px;text-align:center;">'.$row['din'].'</td>
           <td style="height:30px;text-align:center;">'.$row['dinp'].'</td>
           
           </tr>
             <tr>
               <td style="height:30px;text-align:center;">Stocks</td>
           <td style="height:30px;text-align:center;">'.$row['staud1'].'</td>
           <td style="height:30px;text-align:center;">'.$row['staud1'].'</td>
           <td style="height:30px;text-align:center;">'.$row['stin'].'</td>
           <td style="height:30px;text-align:center;">'.$row['stinp'].'</td>
           </tr>
             <tr>
               <td style="height:30px;text-align:center;">Creditors</td>
           <td style="height:30px;text-align:center;">'.$row['craud1'].'</td>
           <td style="height:30px;text-align:center;">'.$row['craud1'].'</td>
           <td style="height:30px;text-align:center;">'.$row['crin'].'</td>
           <td style="height:30px;text-align:center;">'.$row['crinp'].'</td>
           </tr>
             <tr>
               <td style="height:30px;text-align:center;">Net Profit</td>
           <td style="height:30px;text-align:center;">'.$row['naud1'].'</td>
           <td style="height:30px;text-align:center;">'.$row['naud1'].'</td>
           <td style="height:30px;text-align:center;">'.$row['nin'].'</td>
           <td style="height:30px;text-align:center;">'.$row['ninp'].'</td>
           </tr>
           
       </table>
       <br>
       
       <p id="h">Note :</p>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<ul list-style-type="square"><li>'.$note1.'</li><li>'.$note2.'</li><li>'.$note3.'</li><li>'.$note4.'</li><li>'.$note5.'</li><li>'.$note6.'</li></ul>
       <br><br><div class="page-break"></div>
       <p id="h" id="h" style="font-size:18px;text-align:left;">B. Particulars of sales for last ten months. (Rs in lakhs)</p><br>
       <table width="80%" >	
        <tr class="teb"><td id="h" style="text-align:center;" class="teb">Sl.no</th><th class="teb" style="text-align:center;">Month</th><th class="teb"  style="text-align:center;width:100px;">FY'.$row['year5'].'<br>-<br>'.$row['year6'].'</th><th class="teb"  style="text-align:center;">Month</th><th class="teb"  style="text-align:center;width:100px;">FY'.$row['year7'].'<br>-<br>'.$row['year8'].'</th></tr>
        <tr class="teb"><td style="text-align:center;">01</td><td style="text-align:center;">Apr -   &nbsp; '.$row['m1'].'</td><td style="text-align:center;">'.$row['fy1'].'</td><td style="text-align:center;">Apr -  &nbsp;  '.$row['m2'].'<td style="text-align:center;">'.$row['fy2'].'</td></tr>
           <tr class="teb"><td style="text-align:center;">02</td><td style="text-align:center;">May -   &nbsp; '.$row['m12'].'</td><td style="text-align:center;">'.$row['fy12'].'</td><td style="text-align:center;">May -  &nbsp;  '.$row['m22'].'<td style="text-align:center;">'.$row['fy22'].'</td></tr>
           <tr class="teb"><td style="text-align:center;">03</td><td style="text-align:center;">Jun -   &nbsp; '.$row['m13'].'</td><td style="text-align:center;">'.$row['fy13'].'</td><td style="text-align:center;">Jun -  &nbsp;  '.$row['m23'].'<td style="text-align:center;">'.$row['fy23'].'</td></tr>
           <tr class="teb"><td style="text-align:center;">04</td><td style="text-align:center;">Jul -   &nbsp; '.$row['m14'].'</td><td style="text-align:center;">'.$row['fy14'].'</td><td style="text-align:center;">Jul -  &nbsp;  '.$row['m24'].'<td style="text-align:center;">'.$row['fy24'].'</td></tr>
           <tr class="teb"><td style="text-align:center;">05</td><td style="text-align:center;">Aug -   &nbsp; '.$row['m15'].'</td><td style="text-align:center;">'.$row['fy15'].'</td><td style="text-align:center;">Aug -  &nbsp;  '.$row['m25'].'<td style="text-align:center;">'.$row['fy25'].'</td></tr>
           <tr class="teb"><td style="text-align:center;">06</td><td style="text-align:center;">Sep -   &nbsp; '.$row['m16'].'</td><td style="text-align:center;">'.$row['fy16'].'</td><td style="text-align:center;">Sep -  &nbsp;  '.$row['m26'].'<td style="text-align:center;">'.$row['fy26'].'</td></tr>
           <tr class="teb"><td style="text-align:center;">07</td><td style="text-align:center;">Oct -   &nbsp; '.$row['m17'].'</td><td style="text-align:center;">'.$row['fy17'].'</td><td style="text-align:center;">Oct -  &nbsp;  '.$row['m27'].'<td style="text-align:center;">'.$row['fy27'].'</td></tr>
           <tr class="teb"><td style="text-align:center;">08</td><td style="text-align:center;">Nov -   &nbsp; '.$row['m18'].'</td><td style="text-align:center;">'.$row['fy18'].'</td><td style="text-align:center;">Nov -  &nbsp;  '.$row['m28'].'<td style="text-align:center;">'.$row['fy28'].'</td></tr>
           
           <tr class="teb"><td style="text-align:center;">09</td><td style="text-align:center;">Dec -   &nbsp; '.$row['m19'].'</td><td style="text-align:center;">'.$row['fy19'].'</td><td style="text-align:center;">Dec -  &nbsp;  '.$row['m29'].'<td style="text-align:center;">'.$row['fy29'].'</td></tr>
           
           <tr class="teb"><td style="text-align:center;">10</td><td style="text-align:center;">Jan -   &nbsp;&nbsp; '.$row['m110'].'</td><td style="text-align:center;">'.$row['fy110'].'</td><td style="text-align:center;">Jan -  &nbsp;&nbsp;  '.$row['m210'].'</td><td style="text-align:center;">'.$row['fy210'].'</td></tr>
           
           <tr class="teb"><td style="text-align:center;">11</td><td style="text-align:center;">Feb -  &nbsp;&nbsp;  '.$row['m111'].'</td><td style="text-align:center;">'.$row['fy111'].'</td><td style="text-align:center;">Feb -  &nbsp;&nbsp; '.$row['m211'].'</td><td style="text-align:center;">'.$row['fy211'].'</td></tr>
           
           <tr class="teb"><td style="text-align:center;">12</td><td style="text-align:center;">Mar -  &nbsp; '.$row['m112'].'</td><td style="text-align:center;">'.$row['fy112'].'</td><td style="text-align:center;">Mar -  &nbsp; '.$row['m212'].'</td><td style="text-align:center;">'.$row['fy212'].'</td></tr>
           <tr class="teb"><td id="h" style="text-align:center;">Total</td><td></td><td id="h" style="text-align:center;">'.$row['tota'].'</td><td></td><td id="h" style="text-align:center;">'.$row['totb'].'</td></tr>
           
       </table>
       <br><br>
       <p id="h" style="text-align:left">C. Any other general information</p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<ul><li>'.$note9.'</li><li>'.$note.'</li><li>'.$note5.'</li><li>'.$note6.'</li></ul>
      
       
       ';
}


$sql = "select * from ann1";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{ 

   $output .= '<div class="page-break"></div>
   <p id="h" style="text-align:left">9.Annexures</p>
   <p id="h" style="text-align:left"><u>Annexures-1</u></p>
   <table width="100%" align="center">
          <tr><th id="h"  style="text-align:center;">Sl.No</th><th id="h"  style="text-align:center;">Date</th><th id="h"  style="text-align:center;">Particulars</th><th id="h"  style="text-align:center;">Voucher Type</th><th id="h"  style="text-align:center;">Amount</th></tr>
           <tr><td style="text-align:center;">01</td><td style="text-align:center;">'.date_format(new DateTime($row['d1']),"d-m-Y").'</td><td style="text-align:center;">'.$row['p1'].'</td><td style="text-align:center;">'.$row['vt1'].'</td><td style="text-align:center;">'.$row['am1'].'</td></tr>
   
           <tr><td style="text-align:center;">02</td><td style="text-align:center;">'.date_format(new DateTime($row['d2']),"d-m-Y").'</td><td style="text-align:center;">'.$row['p2'].'</td><td style="text-align:center;">'.$row['vt2'].'</td><td style="text-align:center;">'.$row['am2'].'</td></tr>
   
        <tr><td style="text-align:center;">03</td><td style="text-align:center;">'.date_format(new DateTime($row['d3']),"d-m-Y").'</td><td style="text-align:center;">'.$row['p3'].'</td><td style="text-align:center;">'.$row['vt3'].'</td><td style="text-align:center;">'.$row['am3'].'</td></tr>
   
          <tr><td style="text-align:center;">04</td><td style="text-align:center;">'.date_format(new DateTime($row['d4']),"d-m-Y").'</td><td style="text-align:center;">'.$row['p4'].'</td><td style="text-align:center;">'.$row['vt4'].'</td><td style="text-align:center;">'.$row['am4'].'</td></tr>
   
           <tr><td style="text-align:center;">05</td><td style="text-align:center;">'.date_format(new DateTime($row['d5']),"d-m-Y").'</td><td style="text-align:center;">'.$row['p5'].'</td><td style="text-align:center;">'.$row['vt5'].'</td><td style="text-align:center;">'.$row['am5'].'</td></tr>
   
   
           <tr><td style="text-align:center;">06</td><td style="text-align:center;">'.date_format(new DateTime($row['d6']),"d-m-Y").'</td><td style="text-align:center;">'.$row['p6'].'</td><td style="text-align:center;">'.$row['vt6'].'</td><td style="text-align:center;">'.$row['am6'].'</td></tr>
   
                   
           <tr><td style="text-align:center;">07</td><td style="text-align:center;">'.date_format(new DateTime($row['d7']),"d-m-Y").'</td><td style="text-align:center;">'.$row['p7'].'</td><td style="text-align:center;">'.$row['vt7'].'</td><td style="text-align:center;">'.$row['am7'].'</td></tr>
   
   
           <tr><td style="text-align:center;">08</td><td style="text-align:center;">'.date_format(new DateTime($row['d8']),"d-m-Y").'</td><td style="text-align:center;">'.$row['p8'].'</td><td style="text-align:center;">'.$row['vt8'].'</td><td style="text-align:center;">'.$row['am8'].'</td></tr>
           
           <tr><td style="text-align:center;">09</td><td style="text-align:center;">'.date_format(new DateTime($row['d9']),"d-m-Y").'</td><td style="text-align:center;">'.$row['p9'].'</td><td style="text-align:center;">'.$row['vt9'].'</td><td style="text-align:center;">'.$row['am9'].'</td></tr>
   
           <tr><td style="text-align:center;">10</td><td style="text-align:center;">'.date_format(new DateTime($row['d10']),"d-m-Y").'</td><td style="text-align:center;">'.$row['p10'].'</td><td style="text-align:center;">'.$row['vt10'].'</td><td style="text-align:center;">'.$row['am10'].'</td></tr>
   
   </table><br><br>
       ';
}
$sql = "select * from ann2";
$res = $conn->query($sql);

while($row = $res->fetch_array())
{ 
    
$output .= '<br><div class="page-break"></div>
<p id="h" style="text-align:left"><u>Annexures-2</u></p>
<table width="100%" align="center">
           <tr><th id="h" style="text-align:center;">Sl.No</th><th id="h"  style="text-align:center;">Particulars</th><th id="h"  style="text-align:center;">Book Quantity</th><th id="h"  style="text-align:center;">Physical Quantity</th><th id="h"  style="text-align:center;">Remarks</th></tr>
           <tr><td style="text-align:center;">01</td><td style="text-align:center;">'.$row['p11'].'</td><td style="text-align:center;">'.$row['bq11'].'</td><td style="text-align:center;">'.$row['pq11'].'</td><td style="text-align:center;">'.$row['rem1'].'</td></tr>
         <tr><td style="text-align:center;">02</td><td style="text-align:center;">'.$row['p12'].'</td><td style="text-align:center;">'.$row['bq12'].'</td><td style="text-align:center;">'.$row['pq12'].'</td><td style="text-align:center;">'.$row['rem1'].'</td></tr>           
         <tr><td style="text-align:center;">03</td><td style="text-align:center;">'.$row['p13'].'</td><td style="text-align:center;">'.$row['bq13'].'</td><td style="text-align:center;">'.$row['pq13'].'</td><td style="text-align:center;">'.$row['rem3'].'</td></tr>
         <tr><td style="text-align:center;">04</td><td style="text-align:center;">'.$row['p14'].'</td><td style="text-align:center;">'.$row['bq14'].'</td><td style="text-align:center;">'.$row['pq14'].'</td><td style="text-align:center;">'.$row['rem4'].'</td></tr>
         <tr><td style="text-align:center;">05</td><td style="text-align:center;">'.$row['p15'].'</td><td style="text-align:center;">'.$row['bq15'].'</td><td style="text-align:center;">'.$row['pq15'].'</td><td style="text-align:center;">'.$row['rem5'].'</td></tr>
        <tr><td style="text-align:center;">06</td><td style="text-align:center;">'.$row['p16'].'</td><td style="text-align:center;">'.$row['bq16'].'</td><td style="text-align:center;">'.$row['pq16'].'</td><td style="text-align:center;">'.$row['rem6'].'</td></tr>
        <tr><td style="text-align:center;">07</td><td style="text-align:center;">'.$row['p17'].'</td><td style="text-align:center;">'.$row['bq17'].'</td><td style="text-align:center;">'.$row['pq17'].'</td><td style="text-align:center;">'.$row['rem7'].'</td></tr>
        <tr><td style="text-align:center;">08</td><td style="text-align:center;">'.$row['p18'].'</td><td style="text-align:center;">'.$row['bq18'].'</td><td style="text-align:center;">'.$row['pq18'].'</td><td style="text-align:center;">'.$row['rem8'].'</td></tr>
     <tr><td style="text-align:center;">09</td><td style="text-align:center;">'.$row['p19'].'</td><td style="text-align:center;">'.$row['bq19'].'</td><td style="text-align:center;">'.$row['pq19'].'</td><td style="text-align:center;">'.$row['rem9'].'</td></tr>
    <tr><td style="text-align:center;">10</td><td style="text-align:center;">'.$row['p20'].'</td><td style="text-align:center;">'.$row['bq20'].'</td><td style="text-align:center;">'.$row['pq20'].'</td><td style="text-align:center;">'.$row['rem10'].'</td></tr>
         <tr><td style="text-align:center;">11</td><td style="text-align:center;">'.$row['p21'].'</td><td style="text-align:center;">'.$row['bq21'].'</td><td style="text-align:center;">'.$row['pq21'].'</td><td style="text-align:center;">'.$row['rem11'].'</td></tr>
         <tr><td style="text-align:center;">12</td><td style="text-align:center;">'.$row['p22'].'</td><td style="text-align:center;">'.$row['bq22'].'</td><td style="text-align:center;">'.$row['pq22'].'</td><td style="text-align:center;">'.$row['rem12'].'</td></tr>
        <tr><td style="text-align:center;">13</td><td style="text-align:center;">'.$row['p23'].'</td><td style="text-align:center;">'.$row['bq23'].'</td><td style="text-align:center;">'.$row['pq23'].'</td><td style="text-align:center;">'.$row['rem13'].'</td></tr>
    <tr><td style="text-align:center;">14</td><td style="text-align:center;">'.$row['p24'].'</td><td style="text-align:center;">'.$row['bq24'].'</td><td style="text-align:center;">'.$row['pq24'].'</td><td style="text-align:center;">'.$row['rem14'].'</td></tr>
        <tr><td style="text-align:center;">15</td><td style="text-align:center;">'.$row['p25'].'</td><td style="text-align:center;">'.$row['bq25'].'</td><td style="text-align:center;">'.$row['pq25'].'</td><td style="text-align:center;">'.$row['rem15'].'</td></tr>
        <tr><td style="text-align:center;">16</td><td style="text-align:center;">'.$row['p26'].'</td><td style="text-align:center;">'.$row['bq26'].'</td><td style="text-align:center;">'.$row['pq26'].'</td><td style="text-align:center;">'.$row['rem16'].'</td></tr>
       <tr><td style="text-align:center;">17</td><td style="text-align:center;">'.$row['p27'].'</td><td style="text-align:center;">'.$row['bq27'].'</td><td style="text-align:center;">'.$row['pq27'].'</td><td style="text-align:center;">'.$row['rem17'].'</td></tr>
       <tr><td style="text-align:center;">18</td><td style="text-align:center;">'.$row['p28'].'</td><td style="text-align:center;">'.$row['bq28'].'</td><td style="text-align:center;">'.$row['pq28'].'</td><td style="text-align:center;">'.$row['rem18'].'</td></tr>
    <tr><td style="text-align:center;">19</td><td style="text-align:center;">'.$row['p29'].'</td><td style="text-align:center;">'.$row['bq29'].'</td><td style="text-align:center;">'.$row['pq29'].'</td><td style="text-align:center;">'.$row['rem19'].'</td></tr>
    <tr><td style="text-align:center;">20</td><td style="text-align:center;">'.$row['p30'].'</td><td style="text-align:center;">'.$row['bq30'].'</td><td style="text-align:center;">'.$row['pq30'].'</td><td style="text-align:center;">'.$row['rem20'].'</td></tr>
</table><br><br><center>
       ';
}
$output .= '</body>';
//Database Part
$dompdf->loadHTML($output);
$dompdf->setPaper('A4','potrait');
$dompdf->render();

//Output the generated pdf
$dompdf->stream('AuditPage',array('Attachment'=>0));



?>
    