<?php
    require_once 'model/connection.php';

    if(isset($_POST['export'])){
        require_once('tcpdf/tcpdf.php');

        $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);

        $pdf -> SetTitle("HTML table to PDF");

        $pdf -> setHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);

        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetDefaultMonospacedFont('helvetica');
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetAutoPageBreak(TRUE, 10);
        $pdf->SetFont('helvetica', '', 12);
        $pdf->AddPage();

        $content =  '';
        $content .= '
        <table>
        <div class="circle"></div>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date Created</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>';
        $db = new DatabaseConnection();
        $data = $db -> select_query(array('*'), "user");
        if( !empty( $data ) ):
            foreach( $data as $key => $d ):
        $content .= '<tr>
                        <td> ';
        $content .= $key+1; 
        $content .= '</td>
                        <td>';
        $content .=  $d[ 'name' ];
        $content .= '</td>
                        <td>'; 
        $content .= $d['email']; 
        $content .= '</td>
                        <td>';
        $date = strtotime( $d['created_date'] );
        $content .= date( 'd/m/Y', $date );
        $content .= '</td>
                        <td>'; 
        $content .= $d['role']; 
        $content .= '</td>
                        </tr>';
        endforeach;
        endif;           
        $content .= '</tbody>
                </table>';
        
        $pdf -> writeHTML($content);
        ob_end_clean();
        $pdf -> Output("table.pdf");
    }
?>