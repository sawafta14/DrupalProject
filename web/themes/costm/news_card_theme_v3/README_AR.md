# Server Plan Card (لـ Drupal View Mode: Card)

هذا المجلد يضيف قالب بطاقة لعرض نوع المحتوى "Server Plan" بنفس شكل الصورة.

## الملفات
- `templates/content/node--server-plan--card.html.twig` : القالب
- `css/hosting-plans.css` : التنسيقات
- `THEME_NAME.libraries.yml.add.txt` : بلوك YAML تضيفيه في ملف `THEME_NAME.libraries.yml` داخل ثيمك.

> ملاحظة: استبدلي `THEME_NAME` باسم ثيمك الحقيقي (مثلاً: `news_card_theme`).

## خطوات التثبيت
1) انسخي الملفَّين إلى داخل ثيمك:
   - `templates/content/node--server-plan--card.html.twig` → `themes/custom/THEME_NAME/templates/content/`
   - `css/hosting-plans.css` → `themes/custom/THEME_NAME/css/`

2) افتحي ملف `themes/custom/THEME_NAME/THEME_NAME.libraries.yml`  
   وأضيفي بلوك المكتبة الموجودة في `THEME_NAME.libraries.yml.add.txt` كما هو.

3) امسكي القالب وافتحيه واستبدلي `THEME_NAME` في سطر `attach_library` باسم ثيمك:
   ```twig
   {{ attach_library('THEME_NAME/hosting-plans') }}
   ```

4) تأكدي أن عندك View Mode باسم `card` ومختار في الـ View (Rendered entity → Card).

5) امسحي الكاش:
   ```bash
   drush cr
   ```

## الحقول المستخدمة
- Boolean: `field_is_active` (لإخفاء البطاقات غير المفعّلة)
- Boolean: `field_is_featured` (شارة Most Popular)
- Number (decimal): `field_price`
- List (text): `field_period` (يعرض بعد السعر)
- Text (formatted, long): `field_features` (كل سطر ميزة)
- Text (plain): `field_ram`, `field_storage`, `field_cpu`, `field_bandwidth`

## ملاحظات
- لو حابة تعرضي زر "View All Plans" أو عنوان القسم، اعمليه كبلوك منفصل فوق/تحت الـ View.
- لو بتستعملي Grid بالـ View، سيبي الـ CSS كما هو (الكارد ثابت) وخلي الأعمدة من إعدادات الـ View.