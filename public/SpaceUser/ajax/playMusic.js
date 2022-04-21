function playSong(Element) {
    $.ajax({
        type: "get",
        data: {idMusique:Element},
        success: function (data) {
            window.location.reload(true);
        },
    });
}


//like
function likeSong(Element) {
    $.ajax({
        type: "get",
        data: {idLike:Element},
        success: function (data) {
            //window.location.reload(true);
        },
    });
}

//next
function nextSong(Element) {
    $.ajax({
        type: "get",
        data: {idNext:Element},
        success: function (data) {
            window.location.reload(true);
        },
    });
}

//preview
function prevSong(Element) {
    $.ajax({
        type: "get",
        data: {idPreview:Element},
        success: function (data) {
            window.location.reload(true);
        },
    });
}

//link Space Album
function linkSpaceAlbum(Element) {
    $.ajax({
        type: "get",
        data: {idSpaceAlbum:Element},
        success: function (data) {
            window.location.replace("../SpaceUser/SpaceAlbum");
        },
    });
}


//link Space Genre
function linkGenre(Element) {
    $.ajax({
        type: "get",
        data: {idGenre:Element},
        success: function (data) {
            window.location.replace("../SpaceUser/Genre");
        },
    });
}

//link Space playlist Spotify
function linkSpacePlaylistSpotify(Element) {
    $.ajax({
        type: "get",
        data: {idSpacePlaylistSpotify:Element},
        success: function (data) {
            window.location.replace("../SpaceUser/SpacePlaylistSpotify");
        },
    });
}

//link Space playlist
function linkSpacePlaylist(Element) {
    $.ajax({
        type: "get",
        data: {idSpacePlaylist:Element},
        success: function (data) {
            window.location.replace("../SpaceUser/SpacePlaylist");
        },
    });
}

//link Space Artist
function linkSpaceArtist(Element) {
    $.ajax({
        type: "get",
        data: {idSpaceArtist:Element},
        success: function (data) {
            window.location.replace("../SpaceUser/SpaceArtist");
        },
    });
}


//like Album
function likedAlbums(Element) {
    $.ajax({
        type: "get",
        data: {idLikeAlbum:Element},
        success: function (data) {
            //window.location.reload(true);
        },
    });
}

//like Album
function likedPlaylists(Element) {
    $.ajax({
        type: "get",
        data: {idLikePlaylist:Element},
        success: function (data) {
            //window.location.reload(true);
        },
    });
}

//like Album
function follow(Element) {
    $.ajax({
        type: "get",
        data: {idFollow:Element},
        success: function (data) {
            
        },
    });
}

//delete playlist
function deletePlaylist(Element) {
    let proced = confirm("Voulez vous vraiment supprimer cette playlist ?");
    if(proced){
        $.ajax({
            type: "get",
            data: {idDeletePlaylist:Element},
            success: function (data) {
                window.location.replace("../SpaceUser/Playlists");
            },
        });
    }
}

//delete music playlist
function deleteMusicPlaylist(Element) {
    let proced = confirm("Voulez vous vraiment supprimer cette musique de cette playlist ?");
    if(proced){
        $.ajax({
            type: "get",
            data: {idDeleteMusicPlaylist:Element},
            success: function (data) {
                window.location.reload(true);
            },
        });
    }
}

//ajout music playlist
function ajoutMusicPlaylist(Element) {
    $.ajax({
        type: "get",
        data: {idAjoutMusicPlaylist:Element},
        success: function (data) {
            
        },
    });
}

//serach
function SearchVal(Element) {
    $.ajax({
        url: "http://localhost/mes_projets/spotify/src/ajax/rechercher.php",
        type: "get",
        data: {
            ValSearch: Element.value
        },
        dataType: "json",
        success: function(data) {
            if(Element.value =="") {
                let content = document.getElementsByClassName("Search");
                for (let i = 0; i < 3; i++) {
                    content[i].style.display = "block";
                    document.getElementById("divSearchResult").style.display = "none";
                }
            }else {
                let content = document.getElementsByClassName("Search");
                for (let i = 0; i < 3; i++) {
                    content[i].style.display = "none";
                }
                document.getElementById("divSearchResult").style.display = "block";
                if(data != "0"){
                    document.getElementById("listSearchResult").innerHTML="";
                    data.forEach(element => {
                        document.getElementById("listSearchResult").innerHTML +='<a onclick="playSong('+element["id"]+')"><img src="http://localhost/mes_projets/spotify/public/SpaceUser/img/bg'+Math.floor(Math.random() * (48 - 2) + 2)+'.jpg" alt=""><br><h4>'+(element["titre"].length>14?element["titre"].substr(0,12)+"...":element["titre"])+'</h4><p>'+element["nameArtist"]+'</p></a>';
                    });
                }
            }
        },
    });
}

//serach artist
function SearchValArtist(Element) {
    $.ajax({
        url: "http://localhost/mes_projets/spotify/src/ajax/rechercherArtist.php",
        type: "get",
        data: {
            ValSearchArtist: Element.value
        },
        dataType: "json",
        success: function(data) {
            if(Element.value =="") {
                let content = document.getElementsByClassName("Search");
                for (let i = 0; i < 3; i++) {
                    content[i].style.display = "block";
                    document.getElementById("divSearchResult1").style.display = "none";
                }
            }else {
                let content = document.getElementsByClassName("Search");
                for (let i = 0; i < 3; i++) {
                    content[i].style.display = "none";
                }
                document.getElementById("divSearchResult1").style.display = "block";
                if(data != "0"){
                    document.getElementById("listSearchResult1").innerHTML="";
                    data.forEach(element => {
                        document.getElementById("listSearchResult1").innerHTML +='<a onclick="linkSpaceArtist('+element["id"]+')"><img src="http://localhost/mes_projets/spotify/public/SpaceUser/img/bg'+Math.floor(Math.random() * (48 - 2) + 2)+'.jpg" alt="" style="border-radius: 100px;"><br><h4>'+(element["nameArtist"].length>14?element["nameArtist"].substr(0,12)+"...":element["nameArtist"])+'</h4></a>';
                    });
                }
            }
        },
    });
}

//add search
function addSearchVal(Element) {
    $.ajax({
        type: "get",
        data: {
            addValSearch: Element.value
        },
        success: function(data) {
        },
    });
}

//update Name Playlist
function updateNamePlaylist(Element) {
    $.ajax({
        type: "get",
        data: {
            updateNamePlaylist: Element.value
        },
        success: function(data) {
        },
    });
}

//update Description Playlist
function updateDescriptionPlaylist(Element) {
    $.ajax({
        type: "get",
        data: {
            updateDescriptionPlaylist: Element.value
        },
        success: function(data) {
        },
    });
}