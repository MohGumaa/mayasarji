<?php
/**
 * Template part for displaying front page content
 *
 * @package mayasarji
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bg  = get_theme_file_uri( 'assets/images/bg-1.webp' );
$banner  = get_theme_file_uri( 'assets/images/banner-2.webp' );
$voice_section = get_theme_file_uri( 'assets/images/img-0.webp' );
?>

<!-- ══════════════════════════════════════
  HERO
══════════════════════════════════════ -->
<section 
  id="hero" 
  class="stripe-texture shadow-hero w-full h-[90svh] min-h-150 overflow-hidden relative"
>
  <div class="container h-full">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center h-full">
      <div class="flex flex-col justify-center text-center lg:text-left order-2 lg:order-1 h-full">
        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-4 md:mb-6 text-balance">Maya Sarji</h1>
        <p class=" font-light text-hero-tag text-white/88 tracking-[0.01em] mb-[2.4em]">The Iconic Voice Behind Global Brands</p>
        <ul class="list-none flex flex-col gap-[0.4em]">
          <li class="font-dm font-normal text-hero-svc text-white/68">Voice Over</li>
          <li class="font-dm font-normal text-hero-svc text-white/68">Communication, Performance and Voice Modulation</li>
          <li class="font-dm font-normal text-hero-svc text-white/68">Emcee | Presenter</li>
        </ul>
      </div>
      <div class="order-1 lg:order-2 flex justify-center h-full">
        <img src="https://mayasarji.test/wp-content/uploads/2026/05/img-1.webp" alt="Flag" class="w-170 object-contain absolute right-0 -bottom-80">
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
  ABOUT
══════════════════════════════════════ -->
<section id="about" class=" py-24 md:py-32 overflow-hidden">
  <div class="container reveal relative z-1">
    <h2 class="page-title font-bold mb-6 md:mb-8 reveal reveal-d1">Meet Maya</h2>

    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 text-foreground leading-6 text-sm">
      <div class="space-y-6 reveal reveal-d2">
        <p>
          Maya Sarji is the iconic voice that resonates with millions around the world. A celebrity multilingual Arabic voice artist in the Middle East, with over 20 years of experience, her voice is synonymous with hundreds of prestigious international and local brands, including L'Oreal, Nestlé, Emirates Airline, Dubai Tourism, Pampers, Ferrero, Hermes, Mercedes and OSN, to name just a few.
        </p>
        <p>
          Maya's linguistic prowess spans four languages and several regional dialects, enabling her to deliver captivating performances across a wide array of voice work. Her extensive repertoire includes TV and radio commercials, IVRs, documentaries, corporate videos, announcements, movie trailers, cartoons, storybooks, jingles and much more.Not just a voice artist, Maya is a professional pianist and singer-songwriter. 
        </p>
        <p>
          With her remarkable versatility and extensive career in voice acting and performance, she has carved out a distinct niche as a communication expert, voice director, and public speaking and voice performance coach, further expanding her influence and expertise in the world of voice.
        </p>
      </div>
      <div class="space-y-6 reveal reveal-d3">
        <p>
          Maya specializes in helping both business and non-business professionals elevate their vocal performance, presentation, and speaking skills. She emphasizes the importance of human connection, paralinguistics and versatility in communication.
        </p>
        <p>
          Her teachings, backed by her experience and musical background, focus on the correct application of tone, voice, and emotion, coupled with impactful content, and physical presence to influence, engage, and captivate audiences. This multifaceted talent has earned her a spot among Yahoo News’ Top 10 Speaking Coaches.
        </p>
        <p>
          Maya’s influence extends beyond individual coaching and prestigious voiceover work for renowned brands. She is a regular speaker at universities and is frequently featured in newspapers, magazines, and on television.
        </p>
        <p>
          Maya is also an Emcee, panel moderator and speaker who has graced many prestigious stages and events.
        </p>
      </div>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════
  BRANDS
══════════════════════════════════════ -->
<section 
  id="brands" 
  class="section-banner section-banner-dark py-24 overflow-hidden"
  style="background-image: url(<?php echo esc_url($bg); ?>)"
  >
  <div class="container text-center reveal mb-16 relative z-1">
    <p class="section-label">
      <?php esc_html_e( 'trusted by', 'mayasarji' ); ?>
    </p>
    <h2 class="section-heading">
      <?php esc_html_e( 'brands', 'mayasarji' ); ?>
    </h2>
    <p class="section-sub-heading">
      <?php esc_html_e( 'Some of Maya\'s key global and regional clients', 'mayasarji' ); ?>
    </p>
  </div>

  <div class="space-y-3 reveal relative z-1">
    
    <!-- Row 1: left -->
    <div class="relative flex overflow-hidden py-2 group">

      <div class="absolute left-0 top-0 bottom-0 w-32 sm:w-40 bg-linear-to-r from-background to-transparent z-10 pointer-events-none hidden"></div>
      <div class="absolute right-0 top-0 bottom-0 w-32 sm:w-40 bg-linear-to-l from-background to-transparent z-10 pointer-events-none hidden"></div>
      
      <div class="flex gap-4 animate-marquee animate-marquee-left">
        <!-- duplicated for seamless loop -->
        <div id="row1"></div>
      </div>

    </div>

    <!-- Row 2: right -->
    <div class="relative flex overflow-hidden py-2 group">
      <div class="absolute left-0 top-0 bottom-0 w-32 sm:w-40 bg-linear-to-r from-background to-transparent z-10 pointer-events-none hidden"></div>
        <div class="absolute right-0 top-0 bottom-0 w-32 sm:w-40 bg-linear-to-l from-background to-transparent z-10 pointer-events-none hidden"></div>  

      <div class="flex gap-4 animate-marquee animate-marquee-right">
        <div id="row2"></div>
      </div>
    </div>

  </div>

  <p class="text-center text-white-60 mt-16 text-sm tracking-wide px-3.5 relative z-1">
    <?php esc_html_e( '...and hundreds more prestigious international and local brands', 'mayasarji' ); ?>
  </p>
</section>

<!-- ══════════════════════════════════════
  ABOUT
══════════════════════════════════════ -->
<section 
  id="voice" 
  class="section-banner section-banner-dark py-24 md:py-32 overflow-hidden"
  style="background-image: url(<?php echo esc_url($voice_section); ?>)"
>
  <div class="container reveal relative z-1">
    <h2 class="page-title font-bold mb-6 md:mb-8 reveal reveal-d1">
      <?php esc_html_e( 'Voice Over', 'mayasarji' ); ?>
    </h2>

    <div class="relative z-1 grid lg:grid-cols-2 gap-12 lg:gap-16 text-foreground leading-6 text-sm">
      <div class="space-y-6 reveal reveal-d2">
        <p><?php esc_html_e( 'With over 20 years of experience, Maya Sarji is the most well known voice in the Arab world. A celebrity voice actor, renowned for being the official voice of hundreds of local and multinational brands, and a voice that has resonated with generations through the years.', 'mayasarji' ); ?></p>
        <p><?php esc_html_e( 'She boasts a huge and very diverse portfolio of voice work including but not limited to radio and TV commercials, documentaries, IVR, corporate narration, public announcements, movie trailers, games, characters, books, jingles, nursery rhymes and the list goes on.', 'mayasarji' ); ?></p>
        <p><?php esc_html_e( 'Her unique edge lies in her academic musical background and mastery of multiple languages and dialects, which have profoundly enriched her voice acting career.', 'mayasarji' ); ?></p>
        <p><?php esc_html_e( 'Maya studied Piano with the Royal British Schools of Music. Her academics give her a deep understanding of voice dynamics, tone, and rhythm and allow her to manipulate her voice with precision, across different pitches and ranges.', 'mayasarji' ); ?></p>
        <p><?php esc_html_e( 'Her musical training enhances her ability to create distinctive voices and complex characters which makes her a highly sought-after voice “actor”. She is also a singer-songwriter who can write and sing different genres of music including traditional Arabic styles.', 'mayasarji' ); ?></p>
      </div>
      <div class="space-y-6 reveal reveal-d3">
        <p><?php esc_html_e( 'Maya is fluent and records in Arabic, English and French. Skilled in classical Arabic, or Fus’ha, she is fluent in Syrian, Lebanese, Saudi, Emarati, Egyptian, White Levant and White Khaleeji dialects.', 'mayasarji' ); ?></p>
        <p><?php esc_html_e( 'Her ability to seamlessly switch between languages adds an unmatched layer of versatility, making her highly in demand, particularly for projects requiring simultaneous multilingual recordings.', 'mayasarji' ); ?></p>
        <p><?php esc_html_e( 'Maya is also privileged with an unparalleled talent for correctly pronouncing foreign names, brands, and culturally specific terms, which is a paramount requirement for brand imaging. She is also a creative writer and voice director, ass', 'mayasarji' ); ?></p>
        <p><?php esc_html_e( 'With a long career marked by versatility and excellence, Maya embodies the qualities of a true mentor, inspiring countless aspiring voice actors. She is a highly respected role model and is revered by generations for her exceptional talent and special mark in the voice over industry.', 'mayasarji' ); ?></p>
        <p><?php esc_html_e( 'A celebrated expert in her field, Maya is a regular speaker at universities and a frequent guest on TV shows and in written publications.', 'mayasarji' ); ?></p>
      </div>
    </div>

  </div>
</section>

<section 
  id="coaching" 
  class="section-banner section-banner-dark py-24 md:py-32 overflow-hidden"
  style="background-image: url(<?php echo esc_url($banner); ?>)"
>
  <div class="container reveal relative z-1">
    <p class="section-label"><?php esc_html_e( 'coaching', 'mayasarji' ); ?></p>
    <h2 class="page-title font-bold mb-6 md:mb-8 reveal reveal-d1 w-full max-w-150">
      <?php esc_html_e( 'Communication, Public Speaking and Vocal Performance', 'mayasarji' ); ?>
    </h2>

    <div class="relative z-1 grid lg:grid-cols-2 gap-12 lg:gap-16 text-foreground leading-6 text-sm">
      <div class="space-y-6 reveal reveal-d2">
        <p><?php esc_html_e( 'Maya Sarji is a multifaceted talent and a celebrity voice over artist in the Middle East. With over 20 years of experience, her impressive career spans roles as a voice actor, speaking coach, voice director, creative director, and professional pianist. With a rich academic background in music and extensive experience in the industry, Maya stands out as a premier speaking and vocal performance coach. Her expertise is dedicated to helping professionals, both in and out of business, refine their vocal performance, presentation, and speaking skills to excel in every facet of their lives.', 'mayasarji' ); ?></p>
        <p><?php esc_html_e( 'Maya’s standout strengths are her diverse voiceover experience and proficiency in commercial, narrative, and character work. This expertise allows her to offer tailored guidance, enhancing her clients versatility and effectiveness. This versatility not only showcases her exceptional acting skills but also provides a unique advantage in teaching clients how to embody different personas and adapt their vocal delivery.', 'mayasarji' ); ?></p>
        <p><?php esc_html_e( 'Whether preparing for a high-stakes presentation, a captivating public speech, an interview or a one-on-one, Maya’s insights and techniques help clients deliver their messages with confidence and clarity.', 'mayasarji' ); ?></p>
        <p><?php esc_html_e( 'Maya’s music background amplifies her coaching effectiveness, enabling her to provide specialized guidance in vocal techniques and performance. Her deep understanding of musical principles helps clients master the nuances of their voice for both speaking engagements and acting roles.', 'mayasarji' ); ?></p>
      </div>
      <div class="space-y-6 reveal reveal-d3">
        <p><?php esc_html_e( 'Fluent in four languages and multiple Arabic dialects, Maya brings a unique edge to her coaching. Her multilingual skills and cultural adaptability make her an expert in guiding clients through cross-cultural communication, ensuring their messages resonate across diverse audiences. Her insight into cultural nuances and language-specific subtleties equips clients to navigate varied settings with confidence and impact.', 'mayasarji' ); ?></p>
        <p><?php esc_html_e( 'As a communication expert, Maya\'s proficiency extends beyond speaking and vocal performance. She is adept in written, verbal, non-verbal, and paralinguistic communication, offering a comprehensive approach to mastering all facets of effective interaction and on-stage presence.', 'mayasarji' ); ?></p>
        <p><?php esc_html_e( 'Maya’s influence extends beyond individual coaching. She is a regular speaker at universities and is always featured in newspapers, magazines, and on television. Her exceptional skills and insights have also earned her a spot on Yahoo Finance’s list of the top 10 speaking coaches. With a prestigious career in voiceover work for renowned multinational brands, Maya\'s dynamic presence and exceptional talent underscore her ability to engage and inspire.', 'mayasarji' ); ?></p>
        <p><?php esc_html_e( 'Her comprehensive coaching empowers individuals to articulate ideas with clarity and poise, making her an invaluable resource for those seeking to elevate their speaking, voice performance, and physical presence.', 'mayasarji' ); ?></p>
      </div>
    </div>

  </div>
</section>

<section 
  id="services" 
  class="section-banner section-banner-dark py-24 md:py-32 overflow-hidden"
  style="background-image: url(<?php echo esc_url($voice_section); ?>)"
>
  <div class="container reveal relative z-1">
    <h2 class="page-title font-bold mb-6 md:mb-8 reveal reveal-d1 w-full max-w-150">
      <?php esc_html_e( 'Services for Individuals and Groups (Available in English and Arabic)', 'mayasarji' ); ?>
    </h2>

    <div class="relative z-1 grid lg:grid-cols-2 gap-12 lg:gap-16 text-foreground leading-6 text-sm">
      <div class="space-y-6 reveal reveal-d2">
        <p><strong>1. <?php esc_html_e('Event Coaching:', 'mayasarji'); ?></strong>
        <?php esc_html_e('Working on speeches and appearances in front of an audience or camera, including preparation and on-site rehearsals and support.', 'mayasarji'); ?></p>

        <p><strong>2. <?php esc_html_e('Media Training:', 'mayasarji'); ?></strong>
          <?php esc_html_e('Preparing for interactions with the media, including interviews and press conferences.', 'mayasarji'); ?></p>

        <p><strong>3. <?php esc_html_e('Public Speaking Coaching:', 'mayasarji'); ?></strong>
        <?php esc_html_e('Mastering public speaking skills, vocal delivery and body language to address audiences across various contexts, presentations and speeches.', 'mayasarji'); ?></p>

        <p><strong>4. <?php esc_html_e('Interview Coaching:', 'mayasarji'); ?></strong>
        <?php esc_html_e('Preparing for job or media interviews, focusing on message delivery and handling questions effectively.', 'mayasarji'); ?></p>

        <p><strong>5. <?php esc_html_e('Performance Coaching:', 'mayasarji'); ?></strong>
        <?php esc_html_e('Improving on-camera performance, vocal delivery, body language and connection for social media and promotional videos.', 'mayasarji'); ?></p>

        <p><strong>6. <?php esc_html_e('Relationship Coaching:', 'mayasarji'); ?></strong>
        <?php esc_html_e('Enhancing active listening, emotional expression, constructive feedback, and effective vocal techniques and word choice.', 'mayasarji'); ?></p>
      </div>
      <div class="space-y-6 reveal reveal-d3">
        <p><strong>7. <?php esc_html_e('Podcast Coaching:', 'mayasarji'); ?></strong>
        <?php esc_html_e('Designing, executing and producing effective podcast content for solo or interview formats.', 'mayasarji'); ?></p>
        <p><strong>8. <?php esc_html_e('Children Coaching:', 'mayasarji'); ?></strong>
        <?php esc_html_e('Developing children’s speaking, voice performance, presentation and social skills.', 'mayasarji'); ?></p>

        <div>
          <p><strong>9. <?php esc_html_e('Business Communication Coaching:', 'mayasarji'); ?></strong>
          <?php esc_html_e('Offering businesses and executives a wide array of communication skills training including:', 'mayasarji'); ?></p>

          <ol class="list-decimal pl-5 mt-3 space-y-2">
            <li><?php esc_html_e('Developing voice communication for leaders.', 'mayasarji'); ?></li>
            <li><?php esc_html_e('Enhancing communication skills and vocal delivery for tele-sales and customer-facing roles.', 'mayasarji'); ?></li>
            <li><?php esc_html_e('Formulating internal and external corporate and brand messaging.', 'mayasarji'); ?></li>
            <li><?php esc_html_e('Refining communication tactics for meetings, negotiations, and professional presentations.', 'mayasarji'); ?></li>
            <li><?php esc_html_e('Customizing speaking and vocal delivery styles using best practices for professionals who rely on their voice such as teachers, lawyers, and artists.', 'mayasarji'); ?></li>
          </ol>
        </div>
      </div>
    </div>

  </div>
</section>