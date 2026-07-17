<!DOCTYPE html>
<html lang="ar" dir="rtl" class="font-sans">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>عانية — هدية واحدة، يجتمع لها الأحبة</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=tajawal:400,500,700,900" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-[#FAF8F4] text-[#1F2937]">

    {{-- ============ Header ============ --}}
    <header class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                {{-- Logo --}}
                <a href="/" class="flex items-center gap-2">
                    <span class="text-3xl">🎁</span>
                    <span class="text-2xl font-bold text-[#0F5132]">عانية</span>
                </a>

                {{-- Navigation --}}
                <nav class="hidden md:flex items-center gap-8">
                    <a href="#how-it-works"
                        class="text-sm font-medium text-[#1F2937] hover:text-[#0F5132] transition-colors">كيف تعمل</a>
                    <a href="#occasions"
                        class="text-sm font-medium text-[#1F2937] hover:text-[#0F5132] transition-colors">المناسبات</a>
                    <a href="#why-aania"
                        class="text-sm font-medium text-[#1F2937] hover:text-[#0F5132] transition-colors">لماذا
                        عانية</a>
                </nav>

                {{-- Auth Buttons --}}
                <div class="flex items-center gap-3">
                    @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm font-medium text-[#0F5132] hover:text-[#0a3d26] transition-colors">
                        لوحة التحكم
                    </a>
                    @else
                    <a href="{{ route('login') }}"
                        class="text-sm font-medium text-[#0F5132] hover:text-[#0a3d26] transition-colors">
                        دخول
                    </a>
                    <a href="{{ route('register') }}"
                        class="text-sm font-medium text-white bg-[#0F5132] hover:bg-[#0a3d26] px-5 py-2 rounded-lg transition-colors shadow-sm">
                        ابدأ مجاناً
                    </a>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    {{-- ============ Hero Section ============ --}}
    <section class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
            <div class="text-center max-w-3xl mx-auto">
                {{-- Badge --}}
                <div
                    class="inline-flex items-center gap-2 bg-[#C9A961]/10 border border-[#C9A961]/30 text-[#0F5132] text-sm font-medium px-4 py-2 rounded-full mb-6">
                    <span>🕌</span>
                    <span>منصة سعودية متوافقة مع الشريعة الإسلامية</span>
                </div>

                {{-- Title --}}
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-[#0F5132] leading-tight mb-6">
                    هدية واحدة،
                    <br>
                    <span class="text-[#C9A961]">يجتمع لها الأحبة</span>
                </h1>

                {{-- Description --}}
                <p class="text-lg sm:text-xl text-[#6B7280] mb-10 leading-relaxed">
                    اختر هدية المناسبة من متجرك المفضل، شارك الرابط مع أحبابك،
                    <br class="hidden sm:block">
                    واتركهم يساهمون حتى تكتمل الهدية.
                </p>

                {{-- CTAs --}}
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="{{ route('register') }}"
                        class="w-full sm:w-auto bg-[#0F5132] hover:bg-[#0a3d26] text-white font-semibold px-8 py-4 rounded-lg transition-colors shadow-md text-center">
                        أنشئ مناسبتك الآن ✨
                    </a>
                    <a href="#how-it-works"
                        class="w-full sm:w-auto border-2 border-[#0F5132] text-[#0F5132] hover:bg-[#0F5132] hover:text-white font-semibold px-8 py-4 rounded-lg transition-colors text-center">
                        شاهد كيف تعمل ←
                    </a>
                </div>

                {{-- Trust Badges --}}
                <div class="flex flex-wrap justify-center gap-6 mt-12 text-sm text-[#6B7280]">
                    <div class="flex items-center gap-2">
                        <span class="text-[#0F5132]">✓</span>
                        <span>رسوم 1% فقط</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-[#0F5132]">✓</span>
                        <span>استرداد مضمون</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-[#0F5132]">✓</span>
                        <span>دفع آمن 100%</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Background Decoration --}}
        <div class="absolute top-0 left-0 w-72 h-72 bg-[#1ABC9C]/10 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#C9A961]/10 rounded-full blur-3xl -z-10"></div>
    </section>

    {{-- ============ How It Works ============ --}}
    <section id="how-it-works" class="py-16 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Section Header --}}
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-[#0F5132] mb-4">
                    كيف تعمل عانية؟
                </h2>
                <p class="text-lg text-[#6B7280]">
                    ثلاث خطوات بسيطة لهدية مثالية
                </p>
            </div>

            {{-- Steps --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Step 1 --}}
                <div class="relative bg-[#FAF8F4] rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
                    <div
                        class="w-16 h-16 bg-[#0F5132] text-white text-2xl font-bold rounded-2xl flex items-center justify-center mx-auto mb-6">
                        1
                    </div>
                    <div class="text-5xl mb-4">🎁</div>
                    <h3 class="text-xl font-bold text-[#1F2937] mb-3">اختر هديتك</h3>
                    <p class="text-[#6B7280] leading-relaxed">
                        تصفح كتالوج المتاجر الشريكة واختر الهدية المناسبة من متجر تثق به.
                    </p>
                </div>

                {{-- Step 2 --}}
                <div class="relative bg-[#FAF8F4] rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
                    <div
                        class="w-16 h-16 bg-[#0F5132] text-white text-2xl font-bold rounded-2xl flex items-center justify-center mx-auto mb-6">
                        2
                    </div>
                    <div class="text-5xl mb-4">📤</div>
                    <h3 class="text-xl font-bold text-[#1F2937] mb-3">شارك الرابط</h3>
                    <p class="text-[#6B7280] leading-relaxed">
                        شارك رابط المناسبة مع أحبابك عبر واتساب أو الرسائل أو أي وسيلة.
                    </p>
                </div>

                {{-- Step 3 --}}
                <div class="relative bg-[#FAF8F4] rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
                    <div
                        class="w-16 h-16 bg-[#0F5132] text-white text-2xl font-bold rounded-2xl flex items-center justify-center mx-auto mb-6">
                        3
                    </div>
                    <div class="text-5xl mb-4">🎉</div>
                    <h3 class="text-xl font-bold text-[#1F2937] mb-3">استلم هديتك</h3>
                    <p class="text-[#6B7280] leading-relaxed">
                        عند اكتمال المبلغ، يُنفَّذ الشراء تلقائياً وتصلك الهدية لباب بيتك.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ Occasions ============ --}}
    <section id="occasions" class="py-16 sm:py-24 bg-[#FAF8F4]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Section Header --}}
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-[#0F5132] mb-4">
                    لكل مناسبة، عانية
                </h2>
                <p class="text-lg text-[#6B7280]">
                    6 أنواع من المناسبات، كلها في مكان واحد
                </p>
            </div>

            {{-- Occasions Grid --}}
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                @php
                $occasions = [
                ['icon' => '👶', 'name' => 'ولادة', 'color' => '#1ABC9C'],
                ['icon' => '💍', 'name' => 'زواج', 'color' => '#C9A961'],
                ['icon' => '🎓', 'name' => 'تخرج', 'color' => '#0F5132'],
                ['icon' => '🏠', 'name' => 'بيت جديد', 'color' => '#1ABC9C'],
                ['icon' => '✈️', 'name' => 'بعثة', 'color' => '#C9A961'],
                ['icon' => '🎊', 'name' => 'أخرى', 'color' => '#0F5132'],
                ];
                @endphp

                @foreach($occasions as $occasion)
                <div
                    class="bg-white rounded-2xl p-6 text-center hover:shadow-lg transition-all hover:-translate-y-1 cursor-pointer border border-gray-100">
                    <div class="text-5xl mb-3">{{ $occasion['icon'] }}</div>
                    <h3 class="font-bold text-[#1F2937]">{{ $occasion['name'] }}</h3>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ Why Aania ============ --}}
    <section id="why-aania" class="py-16 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Section Header --}}
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-[#0F5132] mb-4">
                    لماذا عانية؟
                </h2>
                <p class="text-lg text-[#6B7280]">
                    منصة تجمع بين الأصالة والاحترافية
                </p>
            </div>

            {{-- Features --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Feature 1 --}}
                <div class="text-center">
                    <div class="w-20 h-20 bg-[#0F5132]/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-4xl">🕌</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#1F2937] mb-3">متوافقة مع الشريعة</h3>
                    <p class="text-[#6B7280] leading-relaxed">
                        عقد وكالة شرعي لتنفيذ الشراء، وعقد إجارة منفصل لرسوم الخدمة.
                        أموالك في حساب أمانات منفصل.
                    </p>
                </div>

                {{-- Feature 2 --}}
                <div class="text-center">
                    <div class="w-20 h-20 bg-[#C9A961]/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-4xl">🔒</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#1F2937] mb-3">آمنة ومضمونة</h3>
                    <p class="text-[#6B7280] leading-relaxed">
                        حماية كاملة لبياناتك وأموالك. استرداد مضمون قبل تنفيذ الطلب.
                        متوافقة مع أنظمة SAMA و ZATCA.
                    </p>
                </div>

                {{-- Feature 3 --}}
                <div class="text-center">
                    <div class="w-20 h-20 bg-[#1ABC9C]/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-4xl">💎</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#1F2937] mb-3">شفافة وواضحة</h3>
                    <p class="text-[#6B7280] leading-relaxed">
                        رسوم خدمة 1% فقط، تظهر بوضوح قبل الدفع.
                        تتبع كامل لتقدم المناسبة وكل مساهمة.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ Final CTA ============ --}}
    <section class="py-16 sm:py-24 bg-gradient-to-l from-[#0F5132] to-[#1ABC9C]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">
                ابدأ مناسبتك الأولى اليوم
            </h2>
            <p class="text-lg text-white/90 mb-10 max-w-2xl mx-auto">
                انضم لآلاف السعوديين الذين يختارون عانية لتنظيم إهدائهم الجماعي
                بطريقة شرعية ومنظمة.
            </p>
            <a href="{{ route('register') }}"
                class="inline-block bg-white text-[#0F5132] hover:bg-[#FAF8F4] font-bold px-10 py-4 rounded-lg transition-colors shadow-lg text-lg">
                أنشئ حسابك المجاني ✨
            </a>
            <p class="text-sm text-white/70 mt-6">
                مجاني تماماً — رسوم 1% فقط على المساهمين
            </p>
        </div>
    </section>

    {{-- ============ Footer ============ --}}
    <footer class="bg-[#1F2937] text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                {{-- Brand --}}
                <div class="md:col-span-2">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="text-3xl">🎁</span>
                        <span class="text-2xl font-bold">عانية</span>
                    </div>
                    <p class="text-gray-400 leading-relaxed max-w-md">
                        منصة سعودية متوافقة مع الشريعة الإسلامية لتنظيم الإهداء الجماعي للمناسبات.
                        هدية واحدة، يجتمع لها الأحبة.
                    </p>
                </div>

                {{-- Links --}}
                <div>
                    <h4 class="font-bold mb-4">روابط سريعة</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#how-it-works" class="hover:text-white transition-colors">كيف تعمل</a></li>
                        <li><a href="#occasions" class="hover:text-white transition-colors">المناسبات</a></li>
                        <li><a href="#why-aania" class="hover:text-white transition-colors">لماذا عانية</a></li>
                    </ul>
                </div>

                {{-- Legal --}}
                <div>
                    <h4 class="font-bold mb-4">قانوني</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">الشروط والأحكام</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">سياسة الخصوصية</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">سياسة الاسترداد</a></li>
                    </ul>
                </div>
            </div>

            {{-- Bottom Bar --}}
            <div class="pt-8 border-t border-gray-700 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-sm text-gray-400">
                    © {{ date('Y') }} عانية. جميع الحقوق محفوظة.
                </p>
                <div class="flex items-center gap-4 text-xs text-gray-400">
                    <span>🇸🇦 صُنع في السعودية</span>
                    <span>•</span>
                    <span>🕌 متوافق مع الشريعة</span>
                </div>
            </div>
        </div>
    </footer>

    {{-- Scripts --}}

</body>

</html>