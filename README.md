<div align="center">

# 🎁 منصة عانية — Aania MVP

### نظام الإهداء الجماعي الشرعي

[![Laravel](https://img.shields.io/badge/Laravel-13.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.4-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Livewire](https://img.shields.io/badge/Livewire-3.x-FB70A9?style=for-the-badge&logo=laravel&logoColor=white)](https://livewire.laravel.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind-4.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![Alpine.js](https://img.shields.io/badge/Alpine.js-3.x-8BC0D0?style=for-the-badge)](https://alpinejs.dev)
[![PostgreSQL](https://img.shields.io/badge/PostgreSQL-16-4169E1?style=for-the-badge&logo=postgresql&logoColor=white)](https://postgresql.org)
[![Redis](https://img.shields.io/badge/Redis-7.x-DC382D?style=for-the-badge&logo=redis&logoColor=white)](https://redis.io)
[![Docker](https://img.shields.io/badge/Docker-Sail-2496ED?style=for-the-badge&logo=docker&logoColor=white)](https://www.docker.com)

**هدية واحدة، يجتمع لها الأحبة** 🌙

</div>

---

## 📖 نظرة عامة

**عانية** منصة سعودية متوافقة مع الشريعة الإسلامية لتنظيم الإهداء الجماعي للمناسبات (الولادة، الزواج، التخرج، البيت الجديد، البعثة، وغيرها). تستبدل المنصة آلية تجميع الهدايا العشوائية عبر واتساب بنظام منظم وشرعي:

- يختار صاحب المناسبة هدية محددة من متجر شريك
- يساهم المهدون مالياً عبر رابط مشاركة
- تُحفظ الأموال في حساب أمانات (Escrow) ضمن عقد وكالة
- يُنفَّذ الشراء عند اكتمال المبلغ 100%

### 🎯 الهدف من هذا المستودع

هذا المستودع (`a-mvp`) هو **نسخة أولية قابلة للاختبار (MVP)** تُركّز على إثبات الفكرة الأساسية (Core Loop):

1. ✅ تسجيل الدخول وإنشاء الحساب
2. ✅ إنشاء مناسبة (اسم + مبلغ مستهدف)
3. ✅ صفحة مناسبة عامة مع شريط تقدم
4. ✅ مساهمة وهمية (Mock Payment) لإثبات الفكرة
5. ✅ إغلاق تلقائي عند اكتمال 100%

> 📌 النسخة الكاملة (Full Launch) ستتضمن: بوابة الدفع الحقيقية (Moyasar)، ZATCA، AML/KYC، الحجز بالعربون، الاشتراكات العائلية، البطاقات الرقمية، الذكاء الاصطناعي، ولوحة إدارة استثناءات.

---

## 🏗️ البنية التقنية (Tech Stack)

### الـ Backend
| المكون | الإصدار | الغرض |
|---|---|---|
| **Laravel** | `13.x` | إطار العمل الأساسي |
| **PHP** | `8.4` | Runtime مع Fiber + Property Hooks |
| **PostgreSQL** | `16` | قاعدة البيانات الرئيسية |
| **Redis** | `7.x` | Cache + Queues |
| **Laravel Sail** | `latest` | بيئة التطوير المحلية (Docker) |

### الـ Frontend (TALL Stack)
| المكون | الإصدار | الغرض |
|---|---|---|
| **Tailwind CSS** | `4.x` | التصميم مع RTL أصلي |
| **Alpine.js** | `3.x` | التفاعلية الخفيفة |
| **Livewire** | `3.x` | واجهات تفاعلية بدون API |
| **Vite** | `6.x` | بناء الأصول |

### الأدوات والبنية التحتية
| الأداة | الغرض |
|---|---|
| **Laravel Sail** | بيئة تطوير Docker-based |
| **GitHub CLI (`gh`)** | إدارة المستودع والرفع |
| **Zed IDE** | محرر الأكواد الأساسي |

### التكاملات المستقبلية (Phase 2+)
- 💳 **Moyasar** — بوابة الدفع (Mada, Apple Pay, Google Pay, STC Pay)
- 🧾 **ZATCA Phase 2** — الفوترة الإلكترونية
- 🏦 **SAMA Open Banking** — التسويات الآلية
- 🏢 **وزارة التجارة (MOC)** — التحقق من السجلات التجارية
- 🤖 **Laravel AI SDK** — الذكاء الاصطناعي
- 🎨 **Filament 4** — لوحة الإدارة

---

## 📋 المتطلبات

قبل البدء، تأكد من توفر التالي على جهازك:

- ✅ **Docker Desktop** (أحدث إصدار) — [تحميل](https://www.docker.com/products/docker-desktop)
- ✅ **Git** — [تحميل](https://git-scm.com)
- ✅ **GitHub CLI (`gh`)** — [تحميل](https://cli.github.com)
- ✅ **محرر أكواد** (Zed / VSCode / PhpStorm)

> 💡 **ملاحظة**: لا حاجة لتثبيت PHP أو Composer أو Node.js محلياً — Laravel Sail يوفر كل شيء داخل Docker.

---
## زيارة خدمة MVP 
- رابط المشروع https://exfoliate-reverse-scribing.ngrok-free.dev/
