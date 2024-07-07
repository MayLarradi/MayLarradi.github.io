<style>
    .fade-in {
        opacity: 0;
        animation: fadeIn 1.5s ease-out forwards;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .button-fade-in {
        opacity: 0;
        animation: buttonFadeIn 1.5s ease-out forwards;
        animation-delay: 1s; /* Delay button animation for 1 second after text animation starts */
    }

    @keyframes buttonFadeIn {
        0% {
            opacity: 0;
            transform: translateX(-20px); /* Slide in from left */
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>

<x-guest-layout>
    <div class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
        style="background-image: url('https://cdn.pixabay.com/photo/2016/11/18/14/39/beans-1834984_960_720.jpg')">
    </div>
    <div>
        <div class="container w-full px-5 py-6 mx-auto">
            <h1 class="text-5xl text-gray-800 fade-in">Thank you</h1>
            <p class="text-3xl text-gray-800 fade-in">Your reservation is ready.</p>
        </div>
    </div>
    <button type="button" class="px-4 py-2 bg-green-600 hover:bg-green-500 rounded-lg text-white button-fade-in" style="margin-left: 20px;">
        <a href="/" style="color: white;">Back To The Index</a>
    </button>
</x-guest-layout>
