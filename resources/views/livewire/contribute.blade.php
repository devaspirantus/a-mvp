<div class="min-h-screen bg-[#FAF8F4] py-8 px-4">
    <div class="max-w-2xl mx-auto">
        {{-- Success Message --}}
        @if (session()->has('success'))
        <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg text-center">
            {{ session('success') }}
        </div>
        @endif

        {{-- Event Info --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6 text-center">
            <h2 class="text-xl font-bold text-[#0F5132] mb-2">{{ $event->name }}</h2>
            <p class="text-sm text-[#6B7280]">
                تم جمع {{ number_format($event->collected_amount, 0) }} من {{ number_format($event->target_amount, 0) }}
                ريال
            </p>
        </div>

        {{-- Contribution Form --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h3 class="text-lg font-bold text-[#1F2937] mb-4 text-center">💝 ساهم في المناسبة</h3>

            <form wire:submit="contribute" class="space-y-6">
                {{-- اختيار المبلغ --}}
                <div>
                    <label class="block text-sm font-semibold text-[#1F2937] mb-2">
                        اختر المبلغ (ريال)
                    </label>
                    <div class="grid grid-cols-4 gap-2 mb-3">
                        @foreach ([50, 100, 200, 500] as $quickAmount)
                        <button type="button" wire:click="$set('amount', {{ $quickAmount }})" class="py-3 border-2 rounded-lg font-semibold transition-colors
                                    {{ $amount == $quickAmount
                                        ? 'border-[#0F5132] bg-[#0F5132] text-white'
                                        : 'border-gray-200 text-[#1F2937] hover:border-[#0F5132]' }}">
                            {{ $quickAmount }}
                        </button>
                        @endforeach
                    </div>
                    <input type="number" wire:model="amount" min="10" max="5000" step="10"
                        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#0F5132] text-right"
                        placeholder="أو أدخل مبلغاً مخصصاً">
                    @error('amount')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- الرسالة الشخصية --}}
                <div>
                    <label class="block text-sm font-semibold text-[#1F2937] mb-2">
                        رسالة شخصية (اختياري)
                    </label>
                    <textarea wire:model="message" rows="2" maxlength="280" placeholder="ألف مبروك! 🎉"
                        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#0F5132] text-right resize-none"
                        dir="rtl"></textarea>
                </div>

                {{-- خيار الإخفاء --}}
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" wire:model="anonymous"
                        class="w-5 h-5 rounded border-gray-300 text-[#0F5132] focus:ring-[#0F5132]">
                    <span class="text-sm text-[#1F2937]">إخفاء هويتي (مهدٍ مجهول)</span>
                </label>

                {{-- ملخص الدفع --}}
                <div class="bg-[#FAF8F4] rounded-lg p-4 space-y-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-[#6B7280]">المبلغ</span>
                        <span class="font-semibold">{{ number_format($amount, 0) }} ر.س</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-[#6B7280]">رسوم الخدمة (1%)</span>
                        <span class="font-semibold">{{ number_format($amount * 0.01, 2) }} ر.س</span>
                    </div>
                    <div class="border-t border-gray-200 pt-2 flex justify-between">
                        <span class="font-bold text-[#1F2937]">الإجمالي</span>
                        <span class="font-bold text-[#0F5132] text-lg">
                            {{ number_format($amount * 1.01, 2) }} ر.س
                        </span>
                    </div>
                </div>

                {{-- زر التأكيد --}}
                <button type="submit"
                    class="w-full bg-[#0F5132] hover:bg-[#0a3d26] text-white font-semibold py-4 rounded-lg transition-colors shadow-sm">
                    تأكيد المساهمة 💳
                </button>

                <p class="text-xs text-center text-[#6B7280]">
                    🔒 هذه مساهمة تجريبية (Mock) — لن يتم خصم أي مبلغ
                </p>
            </form>
        </div>
    </div>
</div>