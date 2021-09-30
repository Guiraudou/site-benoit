<?php

namespace App;

class Project
{
	private bool $isPro;
	private string $name;
	private ?string $url = null;
	private \DateTime $date;
	private ?string $descFr = null;
	private ?string $descEn = null;
	private ?string $thumbnailFilename = null;
	private ?string $previewFilename = null;

	/**
	 * @return Project[]
	 */
	public static function getList(): array
	{
		$listProjects = [];
		try {
			$projectsData = json_decode(file_get_contents(__DIR__ . '/../data/projects.json'), true);
			$projectsData = array_filter($projectsData['projects'], fn($projectData) => !isset($projectData['displayed']) || ((bool)$projectData['displayed']));

			foreach ($projectsData as $projectData) {
				$project = new Project();
				$project->setIsPro($projectData['type_projet'] === 'PRO');
				$project->setName($projectData['name']);
				$project->setUrl($projectData['url'] ?? null);
				$project->setDate(new \DateTime($projectData['date'].' 00:00:00'));
				$project->setDescFr($projectData['desc_fr'] ?? null);
				$project->setDescEn($projectData['desc_en'] ?? null);
				$project->setThumbnailFilename($projectData['thumbnail_filename'] ?? null);
				$project->setPreviewFilename($projectData['preview_filename'] ?? null);
				$listProjects[] = $project;
			}
		}
		catch (\Exception $e) {}
		usort($listProjects, fn(Project $p1, Project $p2) => $p2->getDate()->getTimestamp() <=> $p1->getDate()->getTimestamp());
		return $listProjects;
	}

	public function getDesc(): ?string
	{
		return LANGUAGE === 'en' ? $this->getDescEn() : $this->getDescFr();
	}

	public function getPreviewFilePath(): ?string
	{
		if (empty($this->getPreviewFilename())) {
			return null;
		}
		return 'data/project_previews/'.$this->getPreviewFilename();
	}

	public function getThumbnailFilePath(): ?string
	{
		if (empty($this->getThumbnailFilename())) {
			return null;
		}
		return 'data/project_previews/'.$this->getThumbnailFilename();
	}




	/**
	 * @return bool
	 */
	public function isPro(): bool
	{
		return $this->isPro;
	}

	/**
	 * @param bool $isPro
	 */
	public function setIsPro(bool $isPro): void
	{
		$this->isPro = $isPro;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName(string $name): void
	{
		$this->name = $name;
	}

	/**
	 * @return string|null
	 */
	public function getUrl(): ?string
	{
		return $this->url;
	}

	/**
	 * @param string|null $url
	 */
	public function setUrl(?string $url): void
	{
		$this->url = $url;
	}

	/**
	 * @return \DateTime
	 */
	public function getDate(): \DateTime
	{
		return $this->date;
	}

	/**
	 * @param \DateTime $date
	 */
	public function setDate(\DateTime $date): void
	{
		$this->date = $date;
	}

	/**
	 * @return string|null
	 */
	public function getDescFr(): ?string
	{
		return $this->descFr;
	}

	/**
	 * @param string|null $descFr
	 */
	public function setDescFr(?string $descFr): void
	{
		$this->descFr = $descFr;
	}

	/**
	 * @return string|null
	 */
	public function getDescEn(): ?string
	{
		return $this->descEn;
	}

	/**
	 * @param string|null $descEn
	 */
	public function setDescEn(?string $descEn): void
	{
		$this->descEn = $descEn;
	}

	/**
	 * @return string|null
	 */
	public function getThumbnailFilename(): ?string
	{
		return $this->thumbnailFilename;
	}

	/**
	 * @param string|null $thumbnailFilename
	 */
	public function setThumbnailFilename(?string $thumbnailFilename): void
	{
		$this->thumbnailFilename = $thumbnailFilename;
	}

	/**
	 * @return string|null
	 */
	public function getPreviewFilename(): ?string
	{
		return $this->previewFilename;
	}

	/**
	 * @param string|null $previewFilename
	 */
	public function setPreviewFilename(?string $previewFilename): void
	{
		$this->previewFilename = $previewFilename;
	}

}