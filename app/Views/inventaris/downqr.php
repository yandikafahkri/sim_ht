
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <?= $this->renderSection('title') ?>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/components.css">

  <!-- DataTable -->
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/dataTables/datatables.min.css">
</head>

<body>

    <section class="section">

    <?php use CodeItNow\BarcodeBundle\Utils\QrCode; ?>

                <div class="card-body">
                <table class="table table-bordered border-danger">
                    <tr>
                        <td>
                        <?php

                        $qrCode = new QrCode();
                        $qrCode
                            ->setText('localhost:8080/inventaris/'.$inventaris->alias_ht)
                            ->setSize(120)
                            ->setPadding(10)
                            ->setErrorCorrection('high')
                            ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
                            ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
                            ->setLabel($inventaris->alias_ht)
                            ->setLabelFontSize(10)
                            ->setImageType(QrCode::IMAGE_TYPE_PNG)
                        ;
                        echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';
                        ?>
                        </td>
                        <td>
                        <?php

                        $qrCode = new QrCode();
                        $qrCode
                            ->setText('localhost:8080/inventaris/'.$inventaris->alias_ht)
                            ->setSize(120)
                            ->setPadding(10)
                            ->setErrorCorrection('high')
                            ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
                            ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
                            ->setLabel($inventaris->alias_ht)
                            ->setLabelFontSize(10)
                            ->setImageType(QrCode::IMAGE_TYPE_PNG)
                        ;
                        echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';
                        ?>
                        </td>
                        <td>
                        <?php

                        $qrCode = new QrCode();
                        $qrCode
                            ->setText('localhost:8080/inventaris/'.$inventaris->alias_ht)
                            ->setSize(120)
                            ->setPadding(10)
                            ->setErrorCorrection('high')
                            ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
                            ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
                            ->setLabel($inventaris->alias_ht)
                            ->setLabelFontSize(10)
                            ->setImageType(QrCode::IMAGE_TYPE_PNG)
                        ;
                        echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';
                        ?>
                        </td>
                        <td>
                        <?php

                        $qrCode = new QrCode();
                        $qrCode
                            ->setText('localhost:8080/inventaris/'.$inventaris->alias_ht)
                            ->setSize(120)
                            ->setPadding(10)
                            ->setErrorCorrection('high')
                            ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
                            ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
                            ->setLabel($inventaris->alias_ht)
                            ->setLabelFontSize(10)
                            ->setImageType(QrCode::IMAGE_TYPE_PNG)
                        ;
                        echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';
                        ?>
                        </td>
                        <td>
                        <?php

                        $qrCode = new QrCode();
                        $qrCode
                            ->setText('localhost:8080/inventaris/'.$inventaris->alias_ht)
                            ->setSize(120)
                            ->setPadding(10)
                            ->setErrorCorrection('high')
                            ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
                            ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
                            ->setLabel($inventaris->alias_ht)
                            ->setLabelFontSize(10)
                            ->setImageType(QrCode::IMAGE_TYPE_PNG)
                        ;
                        echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';
                        ?>
                        </td>
                        <td>
                        <?php

                        $qrCode = new QrCode();
                        $qrCode
                            ->setText('localhost:8080/inventaris/'.$inventaris->alias_ht)
                            ->setSize(120)
                            ->setPadding(10)
                            ->setErrorCorrection('high')
                            ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
                            ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
                            ->setLabel($inventaris->alias_ht)
                            ->setLabelFontSize(10)
                            ->setImageType(QrCode::IMAGE_TYPE_PNG)
                        ;
                        echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';
                        ?>
                        </td>
                        <td>
                        <?php

                        $qrCode = new QrCode();
                        $qrCode
                            ->setText('localhost:8080/inventaris/'.$inventaris->alias_ht)
                            ->setSize(120)
                            ->setPadding(10)
                            ->setErrorCorrection('high')
                            ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
                            ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
                            ->setLabel($inventaris->alias_ht)
                            ->setLabelFontSize(10)
                            ->setImageType(QrCode::IMAGE_TYPE_PNG)
                        ;
                        echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';
                        ?>
                        </td>
                        <td>
                        <?php

                        $qrCode = new QrCode();
                        $qrCode
                            ->setText('localhost:8080/inventaris/'.$inventaris->alias_ht)
                            ->setSize(120)
                            ->setPadding(10)
                            ->setErrorCorrection('high')
                            ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
                            ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
                            ->setLabel($inventaris->alias_ht)
                            ->setLabelFontSize(10)
                            ->setImageType(QrCode::IMAGE_TYPE_PNG)
                        ;
                        echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';
                        ?>
                        </td>
                    </tr>
                    </table>
                </div>

    </section>

	<script type="text/javascript"> 
		window.addEventListener("load", window.print());
	</script>

</body>
</html>
