package online.fredinfo.portfolio.domain.usecases.HobbyCRUD;

import online.fredinfo.portfolio.domain.entities.Hobby;
import online.fredinfo.portfolio.domain.entities.HobbyRepository;

import java.util.List;
import java.util.UUID;

public class FindCvUseCase {
    private final HobbyRepository hobbyRepository;

    public FindCvUseCase(HobbyRepository hobbyRepository) {
        this.hobbyRepository = hobbyRepository;
    }

    public HobbyRepository getHobbyRepository() {
        return hobbyRepository;
    }

    public Hobby execute(UUID id) {
        return this.hobbyRepository.findById(id);
    }

    public List<Hobby> execute() {
        return this.hobbyRepository.findAll();
    }

    public List<Hobby> execute(String name) {
        return this.hobbyRepository.findByName(name);
    }
}
