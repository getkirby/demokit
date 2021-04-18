<div class="map" style="--w:<?= $w ?? 2 ?>; --h:<?= $h ?? 1 ?>">
  <iframe src="https://maps.google.com/maps?q=<?= esc($location['lat'] ?? '49.40768', 'url') ?>,<?= esc($location['lon'] ?? '8.69079', 'url') ?>&z=<?= esc($location['zoom'] ?? 12, 'url') ?>&output=embed"></iframe>
</div>
