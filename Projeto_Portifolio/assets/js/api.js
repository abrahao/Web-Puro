
async function fetchProfileData() {
    const url = 'https://raw.githubusercontent.com/abrahao/Web-Puro/main/Projeto_Portifolio/data/profile.json';
    const response = await fetch(url)
    const profileData = await response.json()
    return profileData
}
