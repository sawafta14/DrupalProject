# TechCo Server Plan (V2)

ثيم فرعي جاهز لـ Bootstrap Barrio يعطي شكل بطاقات تسعير نظيف شبيه بالصورة (Badge + زر + نقاط).
- **مهم**: في View mode "Card" اخفِ كل Labels للحقل وإلا ستشاهد تكرار أسماء الحقول.

## طريقة التركيب
1) انسخ المجلد `techco_server_plan` إلى `web/themes/custom/`.
2) من Appearance فعّل الثيم واجعله Default (أو استخدم Drush).
3) أنشئ View mode باسم `Card` ثم في Manage display (لنوع المحتوى Server Plan) اجعل **Labels = Hidden** لكل الحقول ورتّبها كما في القالب.
4) في الـ View التي تعرض /server-plans اختر **View mode = Card** و **Grid** بعدد أعمدة 2 أو 3.

## تخصيص الألوان
عدّلي المتغيرات في `css/pricing-cards.css`:
:root {{ --tc-primary: #3b82f6; --tc-accent: #3b82f6; }}

لو أردت لونك الأخضر:
--tc-primary: rgb(132,232,73);
--tc-accent: rgb(132,232,73);
