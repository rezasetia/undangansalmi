// SET API SUPABASE
const API_URL = "https://bxyyvhzdliyfmujpwvxy.supabase.co";
const API_KEY =
  "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImJ4eXl2aHpkbGl5Zm11anB3dnh5Iiwicm9sZSI6ImFub24iLCJpYXQiOjE2OTc0Njc1NjEsImV4cCI6MjAxMzA0MzU2MX0.XQAJDy3hR7zqtuEZnnf6n5X6GUB0IvSRhlxhixAFMF0";
const SUPABASE = supabase.createClient(API_URL, API_KEY);

const getAllPosts = async () => {
  try {
    const { data: posts, error: postsError } = await SUPABASE.from(
      "user_undangan"
    ).select("nama, komentar");

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
