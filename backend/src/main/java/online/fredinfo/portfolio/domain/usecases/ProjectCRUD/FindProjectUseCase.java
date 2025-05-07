package online.fredinfo.portfolio.domain.usecases.ProjectCRUD;

import online.fredinfo.portfolio.domain.entities.Project;
import online.fredinfo.portfolio.domain.entities.ProjectRepository;
import online.fredinfo.portfolio.domain.entities.Skill;

import java.time.Duration;
import java.util.Date;
import java.util.List;
import java.util.UUID;

public class FindProjectUseCase {
    private final ProjectRepository projectRepository;

    public FindProjectUseCase(ProjectRepository projectRepository) {
        this.projectRepository = projectRepository;
    }

    public ProjectRepository getProjectRepository() {
        return projectRepository;
    }

    public Project execute(UUID id) {
        return this.projectRepository.findById(id);
    }

    public List<Project> execute() {
        return this.projectRepository.findAll();
    }

    public List<Project> executeByOwnerId(UUID ownerId) {
        return this.projectRepository.findByOwnerId(ownerId);
    }

    public List<Project> execute(String name) {
        return this.projectRepository.findByName(name);
    }

    public List<Project> executeByCompanyId(UUID companyId) {
        return this.projectRepository.findByCompanyId(companyId);
    }

    public List<Project> executeStartingDateBefore(Date startingDate) {
        return this.projectRepository.findAllWithStartingDateBefore(startingDate);
    }

    public List<Project> executeStartingDateAfter(Date startingDate) {
        return this.projectRepository.findAllWithStartingDateAfter(startingDate);
    }

    public List<Project> executeEndingDateBefore(Date endingDate) {
        return this.projectRepository.findAllWithEndingDateBefore(endingDate);
    }

    public List<Project> executeEndingDateAfter(Date endingDate) {
        return this.projectRepository.findAllWithEndingDateAfter(endingDate);
    }

    public List<Project> executeDurationLessThan(Duration duration) {
        return this.projectRepository.findAllWithDurationLessThan(duration);
    }

    public List<Project> executeDurationGreaterThan(Duration duration) {
        return this.projectRepository.findAllWithDurationGreaterThan(duration);
    }

    public List<Project> executeDurationBetween(Duration duration1, Duration duration2) {
        return this.projectRepository.findAllWithDurationBetween(duration1, duration2);
    }

    public List<Project> executeBySkills(List<Skill> skills) {
        return this.projectRepository.findAllWithSkills(skills);
    }
}
