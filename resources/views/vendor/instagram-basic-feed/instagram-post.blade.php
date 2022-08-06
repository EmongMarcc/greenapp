<div class="flex">
  <?php if (InstagramBasicFeed::getAllUserMedias()): ?>
    @foreach(InstagramBasicFeed::getAllUserMedias() as $media)
    <div class="shadow-lg bg-gray-500 bg-opacity-50 transition duration-150 ease-in-out glow-effect">
      <?php if ($media->media_type === "VIDEO"): ?>
        <button class="w-40" type="button" @click="open = '<?php echo $media->permalink.'embed' ?>'">
        <img class="w-40 h-40 object-cover" rel="nofollow" src="{{ $media->thumbnail_url }}" alt="{{ substr($media->caption ?? 'insta_greenapple', 0, 20) }}">
        </button>
        <?php else: ?>
          <button class="w-40" type="button" @click="open = '<?php echo $media->permalink.'embed' ?>'">
          <img class="w-40 h-40 object-cover" rel="nofollow" src="{{ $media->media_url }}" alt="{{ substr($media->caption ?? 'insta_greenapple', 0, 20) }}">

        </button>
      <?php endif; ?>

    </div>
    @endforeach
  <?php endif; ?>
</div>
