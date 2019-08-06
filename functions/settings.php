<?php 
	class Settings extends Database{
		public function getSettings(){
			$pdo = $this->Connect();
			$sql = "SELECT * FROM Settings";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$data = $stmt->fetch();
			return $data;
		}

		public function changesettings($title,$url,$favicon,$description,$email){
			$pdo = $this->Connect();
			$settings = $this->getSettings();
			if ($settings->Title == $title) {
				$newTitle = $settings->Title;
			} else {
				$newTitle = $title;
			}

			if ($settings->URL == $url) {
				$newURL = $settings->URL;
			} else {
				$newURL = $url;
			}

			if ($settings->FavIcon == $favicon) {
				$newFavicon = $settings->FavIcon;
			} else {
				$newFavicon = $favicon;
			}

			if ($settings->Description == $description) {
				$newDescription = $settings->Description;
			} else {
				$newDescription = $description;
			}
			if ($settings->websiteEmail == $email) {
				$newEmail = $settings->websiteEmail;
			} else {
				$newEmail = $email;
			}

			$sql = "UPDATE Settings SET 
			Title = :title,
			URL = :url,
			Description = :description,
			FavIcon = :favicon,
			websiteEmail = :email
			WHERE id = 1";
			$stmt = $pdo->prepare($sql);
			$stmt->execute(['title'=>$newTitle,'url'=>$newURL,'description'=>$newDescription,'favicon'=>$newFavicon,'email'=>$newEmail]);
			return 'Settings Updated';
		}
	}
?>