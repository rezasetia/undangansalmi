// SET API SUPABASE
const API_URL = "https://bxyyvhzdliyfmujpwvxy.supabase.co";
const API_KEY =
  "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImJ4eXl2aHpkbGl5Zm11anB3dnh5Iiwicm9sZSI6ImFub24iLCJpYXQiOjE2OTc0Njc1NjEsImV4cCI6MjAxMzA0MzU2MX0.XQAJDy3hR7zqtuEZnnf6n5X6GUB0IvSRhlxhixAFMF0";
const SUPABASE = supabase.createClient(API_URL, API_KEY);

const setSwiperDOM = document.querySelector("#swiper-wrapper");

const getAllPosts = async () => {
  try {
    const { data: posts, error: postsError } = await SUPABASE.from(
      "user_undangan"
    ).select("nama, komentar, created_at");

    if (postsError !== null) {
      throw postsError;
    }

    return posts;
  } catch (e) {
    console.log(e);
  }
};

const insertPost = async ({ nama, komentar }) => {
  try {
    const { error } = await SUPABASE.from("user_undangan").insert({
      nama: nama,
      komentar: komentar,
    });

    if (error !== null) {
      throw error;
    }

    const comments = await getAllPosts();
    injectToComment(comments);
  } catch (e) {
    console.log(e);
  }
};

const onInsertData = () => {
  try {
    // GET DATA FROM FORM
    const setData = {
      nama: document.forms["komentar-form"]["nama"].value,
      komentar: document.forms["komentar-form"]["komentar"].value,
    };

    // RESET FORM
    document.forms["komentar-form"]["nama"].value = "";
    document.forms["komentar-form"]["komentar"].value = "";

    insertPost(setData);
  } catch (e) {
    console.log(e);
  }
};

async function setComments() {
  const comments = await getAllPosts();
  injectToComment(comments);
}

function injectToComment(dataPosts) {
  let listArticle = "";
  dataPosts.forEach((post) => {
    listArticle += `
    <article class="swiper-slide w-10/12 p-6 mb-3 lg:ml-12 text-base bg-white rounded-lg dark:bg-hijau100">
    <footer class="flex justify-between items-center mb-2">
        <div class="flex items-center">
            <p
                class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                <img class="mr-2 w-6 h-6 rounded-full"
                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                    alt="${post.nama}">${post.nama}
            </p>
            <p class="text-sm text-gray-600 dark:text-white">${post[
              "created_at"
            ].substring(0, 10)}</p>
        </div>
    </footer>
    <p class="text-white dark:text-white text-ellipsis overflow-hidden break-words w-full">${
      post.komentar
    }</p>
    <div class="flex items-center mt-4 space-x-4">
    </div>
</article>
      `;
  });

  setSwiperDOM.innerHTML = listArticle;
}

setComments();
