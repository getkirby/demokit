<div class="map" style="--w:<?= $w ?? 2 ?>; --h:<?= $h ?? 1 ?>">
  <iframe src="https://maps.google.com/maps?q=<?= $location['lat'] ?? '49.40768' ?>,<?= $location['lon'] ?? '8.69079' ?>&z=<?= $location['zoom'] ?? 12 ?>&output=embed"></iframe>
</div>
