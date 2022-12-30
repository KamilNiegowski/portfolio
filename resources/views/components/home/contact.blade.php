<!-- ====== Contact Section Start-->
<section id="contact" class="bg-gray dark:bg-primary py-20 lg:pt-[120px] overflow-hidden relative z-10">
    <div class="container">
        <div class="flex flex-wrap lg:justify-between -mx-4">
            <div class="w-full lg:w-1/2 xl:w-6/12 px-4">
                <div class="max-w-[570px] mb-12 lg:mb-0">
                    <h2 class="text-dark dark:text-slate-100 mb-6 uppercase font-bold text-[32px] sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                        Formularz kontaktowy
                    </h2>
                    <p class="text-base font-semibold text-slate-200 dark:text-slate-800 leading-relaxed mb-9">
                        Jeśli chcesz się ze mną skontaktować, <br>skorzystaj z formularza obok.
                    </p>
                    <div class="flex mb-8 max-w-[370px] w-full">
                        <div
                            class="dark:text-slate-300 bg-primary text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]"
                        >
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                class="fill-current"
                            >
                                <path
                                    d="M21.8182 24H16.5584C15.3896 24 14.4156 23.0256 14.4156 21.8563V17.5688C14.4156 17.1401 14.0649 16.7893 13.6364 16.7893H10.4026C9.97403 16.7893 9.62338 17.1401 9.62338 17.5688V21.8173C9.62338 22.9866 8.64935 23.961 7.48052 23.961H2.14286C0.974026 23.961 0 22.9866 0 21.8173V8.21437C0 7.62972 0.311688 7.08404 0.818182 6.77223L11.1039 0.263094C11.6494 -0.0876979 12.3896 -0.0876979 12.9351 0.263094L23.2208 6.77223C23.7273 7.08404 24 7.62972 24 8.21437V21.7783C24 23.0256 23.026 24 21.8182 24ZM10.3636 15.4251H13.5974C14.7662 15.4251 15.7403 16.3995 15.7403 17.5688V21.8173C15.7403 22.246 16.0909 22.5968 16.5195 22.5968H21.8182C22.2468 22.5968 22.5974 22.246 22.5974 21.8173V8.25335C22.5974 8.13642 22.5195 8.01949 22.4416 7.94153L12.1948 1.4324C12.0779 1.35445 11.9221 1.35445 11.8442 1.4324L1.55844 7.94153C1.44156 8.01949 1.4026 8.13642 1.4026 8.25335V21.8563C1.4026 22.285 1.75325 22.6358 2.18182 22.6358H7.48052C7.90909 22.6358 8.25974 22.285 8.25974 21.8563V17.5688C8.22078 16.3995 9.19481 15.4251 10.3636 15.4251Z"
                                />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="font-bold text-dark dark:text-slate-200 text-xl mb-1">
                                Adres email
                            </h4>
                            <p class="text-base text-dark dark:text-slate-200">
                                <a class="hover:text-slate-400"
                                   href="mailto:kamil.niegowski01@gmail.com">
                                    kamil.niegowski01@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                <div class="bg-white dark:bg-slate-900 relative rounded-lg p-8 sm:p-12 shadow-lg">
                    <form action="/contact/submit" method="POST" x-data="
                    {
                        formData:{
                          name:'',
                          email:'',
                          message:'',
                        },
                        errors:{},
                        succesMessage:'',

                        submitForm(event) {
                            this.succesMessage = '';
                            this.errors = {};
                                fetch('/contact/submit' , {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-Requested-With': 'XMLHttpRequest'
                                        'X-CSRF-Token': document.querySelector('meta[name='csrf-token']').getAttribute('content')')
                                    }
                                    body: JSON.stringify(this.formData)
                            })
                            .then(response =>{
                                if(response.status === 200){
                                    return response.json();
                                    } throw response;
                            })
                            .then(result => {
                                this.formData = {
                                    name: '',
                                    email: '',
                                    message: '',
                                  }
                                  this.succesMessage = 'Dziękuję za Twój kontakt w formularzu.'
                            })
                            .catch(res => {
                                 if(res.status === 422){
                                    this.errors = result.errors;
                                   }
                                   console.log(res);
                        }
                    }" x-on:submit.prevent="submitForm">
                        <template x-if="successMessage" class="py-4 px-6 bd-green-600 text-slate-600 mb-4">
                            
                        </template>
                        @csrf
                        <div class="mb-6">
                            <x-forms.input placeholder="Twoję imię" name="name"
                                           x-model="formData.name"></x-forms.input>
                        </div>
                        <div class="mb-6">
                            <x-forms.input type="email" placeholder="Twój email" name="email"
                                           x-model="formData.email"></x-forms.input>
                        </div>
                        <div class="mb-6">
                            <x-forms.textarea placeholder="Twoja wiadomość" rows="6" name="message"
                                              x-model="formData.message"></x-forms.textarea>
                        </div>
                        <div>
                            <x-button class="w-full">Wyślij wiadomość</x-button>
                        </div>
                    </form>
                    <div>
                         <span class="absolute -top-10 -right-9 z-[-1]">
                            <svg
                                width="100"
                                height="100"
                                viewBox="0 0 100 100"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                                  fill="#3056D3"
                              />
                              </svg>
                         </span>
                        <x-contact-dots-top></x-contact-dots-top>
                        <x-contact-dots-bottom></x-contact-dots-bottom>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Contact Section End-->
