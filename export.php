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
        <table style="border: 1px solid #000; padding: 5px;">
        <thead>
            <tr>
                <th style="color: #333333; border-bottom: .2px solid #99999987; font-size: 12px; font-weight: bold; width: 30px">#</th>
                <th style="color: #333333; border-bottom: .2px solid #99999987; font-size: 12px; font-weight: bold; width: 130px">Name</th>
                <th style="color: #333333; border-bottom: .2px solid #99999987; font-size: 12px; font-weight: bold; width: 150px">Email</th>
                <th style="color: #333333; border-bottom: .2px solid #99999987; font-size: 12px; font-weight: bold; width: 100px">Date Created</th>
                <th style="color: #333333; border-bottom: .2px solid #99999987; font-size: 12px; font-weight: bold; width: 80px">Role</th>
            </tr>
        </thead>
        <tbody>';
        $db = new DatabaseConnection();
        $data = $db -> select_query(array('*'), "user");
        if( !empty( $data ) ):
            foreach( $data as $key => $d ):
        $content .= '<tr>
                    <td style="width: 30px"> ';
        $content .= $key+1; 
        $content .= '</td>
                    <td style="width: 130px">';
        $content .=  $d[ 'name' ];
        $content .= '</td>
                    <td style="width: 150px">'; 
        $content .= $d['email']; 
        $content .= '</td>
                    <td style="width: 100px">';
        $date = strtotime( $d['created_date'] );
        $content .= date( 'd/m/Y', $date );
        $content .= '</td>
                    <td style="width: 80px">'; 
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